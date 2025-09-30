<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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



