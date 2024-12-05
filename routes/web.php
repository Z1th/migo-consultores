<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('home'); // Carga el archivo resources/views/home.blade.php
})->name('home');

Route::post('/gracias', [FormularioController::class, 'formulario'])->name('formularioEmpresa');

Route::get('formulario-gracias', function () { return view('gracias');}) ->name('formulario-gracias');

Route::get('/nosotros' , function (){ return view('nosotros'); }) ->name('nosotros');
Route::get('/cobranza' , function (){ return view('cobranza'); }) ->name('cobranza');
Route::get('/cobertura' , function (){ return view('cobertura'); }) ->name('cobertura');
Route::get('/contacto' , function (){ return view('contacto'); }) ->name('contacto');
Route::get('/nuestros-clientes' , function (){ return view('nuestros-clientes'); }) ->name('nuestros-clientes');
