<?php

namespace App\Livewire;

use Livewire\Component;

class Proyectos extends Component
{
        public $proyectos = [];

    public function mount()
    {
        $this->proyectos = [
            [
                'titulo' => 'JobFlow – Gestor de candidaturas',
                'slug' => 'jobflow',
                'descripcion' => 'Pequeña app web para gestionar y seguir las candidaturas que envío como desarrolladora frontend.',
                'tecnologias' => ['HTML', 'TailwindCSS', 'JavaScript'],
                'imagen' => 'jobflow.png',
                'url' => 'https://paugarperezdt.github.io/jobflow',
            ],
            [
                'titulo' => 'Reproductor de Musica',
                'slug' => 'reproductor-musica',
                'descripcion' => 'Aplicación Android para reproducir mp3 y mp4 en dispositivo android.',
                'tecnologias' => ['Android', 'Java'],
                'imagen' => 'reproductor.png',
                'url' => null,
            ],
            [
                'titulo' => 'Blog con Laravel',
                'slug' => 'blog-laravel',
                'descripcion' => 'Blog dinámico con Livewire, comentarios anidados, autenticación, imágenes y panel de administración.',
                'tecnologias' => ['Laravel', 'Livewire', 'MySQL'],
                'imagen' => 'blog.png',
                'url' => null,
            ],
            [
                'titulo' => 'GymBro App',
                'slug' => 'gymbro-app',
                'descripcion' => 'App de entrenamientos en Flutter y Django. Rutinas, logros, récords y estadísticas con JWT y PostgreSQL.',
                'tecnologias' => ['Flutter', 'Django', 'PostgreSQL'],
                'imagen' => 'gymbro.png',
                'url' => null,
            ]
        ];
    }
    

    public function render()
    {
        return view('livewire.proyectos')->layout('layouts.base');
    }
}
