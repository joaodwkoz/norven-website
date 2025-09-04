<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MensagemUsuario extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmação de envio - Norven',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.usuario',
            with: [
                'nome' => $this->nome,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
