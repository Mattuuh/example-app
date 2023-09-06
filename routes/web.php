<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NuevoControlador;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-primer-ruta',[NuevoControlador::class,'miFuncion']);
