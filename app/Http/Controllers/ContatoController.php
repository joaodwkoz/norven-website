<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use App\Mail\MensagemEmpresa;
use App\Mail\MensagemUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviarForm(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'empresa' => 'nullable|string|max:255',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string',
        ]);

        $dadosForm = $request->all();

        try {
            Mail::to('norventcc@gmail.com')->send(new MensagemEmpresa($dadosForm));

            Mail::to($dadosForm['email'])->send(new MensagemUsuario($dadosForm['nome']));

            return response()->json([
                'sucesso' => true,
                'mensagem' => 'Mensagem enviada com sucesso!'
            ], 200);

        } catch(Exception $e){
            return response()->json([
                'sucesso' => false,
                'mensagem' => 'Ocorreu um erro ao enviar.'
            ], 500);
        }
    }
}