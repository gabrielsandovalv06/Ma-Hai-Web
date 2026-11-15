<?php

use Illuminate\Support\Facades\Route;

// Página principal (Inicio)
Route::get('/', function () {
    return view('index');
})->name('inicio');

// Página Sobre Nosotros (Historia, Misión, Visión, Valores, Equipo y Alianzas)
Route::get('/sobre-nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Página Comunidades (Recorrido territorial y las 8 regiones de Lerma)
Route::get('/comunidades', function () {
    return view('comunidades');
})->name('comunidades');

// Página Recursos / Biblioteca (Infografías y Videoteca)
Route::get('/recursos', function () {
    return view('recursos');
})->name('recursos');

// Página Participa / Contacto (Servicio Social UAM y Voluntariado)
Route::get('/participa', function () {
    return view('participa');
})->name('participa');