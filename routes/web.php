<?php
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ReseniaController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para libros
Route::resource('libros', LibroController::class);

// Rutas para autores
Route::resource('autores', AutorController::class);

// Rutas para categorías
Route::resource('categorias', CategoriaController::class);

// Rutas para reseñas
Route::resource('resenias', ReseniaController::class);

// Rutas para usuarios
Route::resource('usuarios', UsuarioController::class);
