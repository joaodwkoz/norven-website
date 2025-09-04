<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/contato/enviar', [ContatoController::class, 'enviarForm'])->name('contato.enviar');

Route::get('/emails/usuario', function () {
    return view('emails.usuario');
});

Route::get('/emails/empresa', function () {
    return view('emails.empresa');
});