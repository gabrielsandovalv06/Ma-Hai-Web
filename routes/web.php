<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.index')->name('inicio');
Route::redirect('/inicio', '/', 301);

Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/comunidades', 'comunidades')->name('comunidades');
Route::view('/biblioteca', 'biblioteca')->name('biblioteca');
Route::view('/videoteca', 'videoteca')->name('videoteca');
Route::view('/contacto', 'contacto')->name('contacto');
