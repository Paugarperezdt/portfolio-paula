<?php

namespace App\Livewire;

use Livewire\Component;

class ProyectoDetalle extends Component
{

    public $slug;
    public $proyecto;
    public $anterior;
    public $siguiente;


    public function mount($slug)
    {
        
        $proyectos = [
            [
                'titulo' => 'Reproductor de Música',
                'slug' => 'reproductor-musica',
                'descripcion' => 'Aplicación Android para reproducir mp3 y mp4...',
                'tecnologias' => ['Android', 'Java'],
                'imagen' => 'reproductor_final.png',
                'github' => 'https://github.com/Paugarperezdt',
                'aprendizaje' => 'Aprendí a trabajar con MediaPlayer en Android, gestionar los permisos y adaptar la interfaz a diferentes dispositivos.',
            ],
            [
                'titulo' => 'Blog con Laravel',
                'slug' => 'blog-laravel',
                'descripcion' => 'Blog dinámico con Livewire, comentarios anidados, autenticación, imágenes y panel de administración.',
                'tecnologias' => ['Laravel', 'Livewire', 'MySQL'],
                'imagen' => 'blog_final.png',
                'github' => 'https://github.com/Paugarperezdt/larablog',
                'aprendizaje' => 'Me permitió entender cómo funcionan los componentes en Livewire, relaciones en bases de datos y validaciones dinámicas.',
            ],
            [
                'titulo' => 'JobFlow – Gestor de candidaturas',
                'slug' => 'jobflow',
                'descripcion' => 'Aplicación web para gestionar mis candidaturas laborales: permite añadir, editar, filtrar por estado y buscar por empresa o puesto.',
                'tecnologias' => ['HTML', 'TailwindCSS', 'JavaScript'],
                'imagen' => 'jobflow_final.png',
                'github' => 'https://github.com/Paugarperezdt/jobflow',
                'aprendizaje' => 'Me ayudó a practicar JavaScript vanilla, manejo del DOM, filtrado de datos, edición y borrado de registros, y persistencia en localStorage, además de diseñar una interfaz limpia con TailwindCSS.',
            ],
            [
                'titulo' => 'GymBro App',
                'slug' => 'gymbro-app',
                'descripcion' => 'App de entrenamientos en Flutter y Django. Rutinas, logros y records con JWT y PostgreSQL.',
                'tecnologias' => ['Flutter', 'Django', 'PostgreSQL'],
                'imagen' => 'gymbro_final.png',
                'github' => 'https://github.com/KevCora/gymbro',
                'aprendizaje' => 'Aprendí a comunicar Flutter con una API REST, manejar JWT y organizar un proyecto completo cliente-servidor.',
            ],
        ];


        $index = collect($proyectos)->search(fn ($p) => $p['slug'] === $slug);

        if ($index === false) {
            abort(404);
        }

        $this->proyecto = $proyectos[$index];
        $this->anterior = $index > 0 ? $proyectos[$index - 1] : null;
        $this->siguiente = $index < count($proyectos) - 1 ? $proyectos[$index + 1] : null;
    }

    public function render()
    {
        return view('livewire.proyecto-detalle')
            ->layout('components.layouts.base', ['title' => $this->proyecto['titulo']]);
    }

}
