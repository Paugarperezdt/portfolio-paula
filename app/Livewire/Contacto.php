<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactoMailable;

class Contacto extends Component
{
    public $nombre = '';
    public $email  = '';
    public $mensaje = '';

    // Si quieres mantener el listener para el futuro reCAPTCHA, lo dejamos, pero sin usarlo.
    protected $listeners = ['setRecaptchaToken'];

    protected function rules()
    {
        return [
            'nombre'  => 'required|min:3',
            'email'   => 'required|email',
            'mensaje' => 'required|min:10',
            // 'recaptcha' => 'required', // <-- desactivado
        ];
    }

    public function enviar()
    {
        $this->validate();

        \Log::info('Contacto: iniciando envío', [
            'to' => config('mail.from.address'),
            'from' => config('mail.from.address'),
            'nombre' => $this->nombre,
            'email' => $this->email,
        ]);

        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactoMailable($this->nombre, $this->email, $this->mensaje));
            \Log::info('Contacto: envío OK');
        } catch (\Throwable $e) {
            \Log::error('Contacto: error SMTP -> '.$e->getMessage());
        }

        session()->flash('success', '¡Gracias! Tu mensaje ha sido enviado.');
        $this->dispatch('formularioEnviado');
        $this->reset(['nombre','email','mensaje']);
    }


    // Lo dejamos por compatibilidad futura (no hace nada ahora)
    public function setRecaptchaToken($token) { /* noop por ahora */ }

    public function render()
    {
        return view('livewire.contacto');
    }
}
