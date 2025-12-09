<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\ProyectoDetalle;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/#contacto', \App\Livewire\Contacto::class)->name('contacto');

Route::get('/proyectos/{slug}', ProyectoDetalle::class)->name('proyectos.detalle');

