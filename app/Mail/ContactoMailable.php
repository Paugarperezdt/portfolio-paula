<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public string $nombre;
    public string $email;
    public string $mensaje;

    /**
     * Crea una nueva instancia del mailable.
     */
    public function __construct(string $nombre, string $email, string $mensaje)
    {
        $this->nombre  = $nombre;
        $this->email   = $email;
        $this->mensaje = $mensaje;
    }

    /**
     * Construye el mensaje.
     */
    public function build()
    {
        return $this->subject("Nuevo mensaje de {$this->nombre}")
            ->from(config('mail.from.address'), config('mail.from.name')) // remitente del dominio
            ->replyTo($this->email, $this->nombre)                        // quien escribe el formulario
            ->view('emails.contacto');
    }
}
