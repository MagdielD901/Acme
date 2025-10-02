<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlanosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/arquitectos', function () {
    return view('arquitectos');
});

Route::get('/planos', [PlanosController::class, 'getPlanos'])->name('planos');

Route::post('/planos', [PlanosController::class, 'store'])->name('planos.store');


