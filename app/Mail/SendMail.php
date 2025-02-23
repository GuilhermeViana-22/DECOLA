<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Criar uma nova instância do e-mail.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Construir o e-mail.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($this->data['subject'])
            ->view($this->data['view'])
            ->with('data', $this->data);
    }

    /**
     * Criar um e-mail para análise de adoções.
     *
     * @param array $data
     * @return static
     */
    public static function enviarNewsLetter($data)
    {
        return new static([
            'subject' => '🎉 Oba! Chegou um novo lead interessado na newsletter!',
            'view' => 'emails.newsletter',
            'body' => $data['body'] ?? 'Nenhuma informação disponível.',
        ]);
    }

}
