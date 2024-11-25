<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('home'); // Carga el archivo resources/views/home.blade.php
})->name('home');

Route::post('/gracias', [FormularioController::class, 'formulario'])    ->name('formularioEmpresa');

Route::get('formulario-gracias', function(){
    return view('gracias');
}) ->name('formulario-gracias');