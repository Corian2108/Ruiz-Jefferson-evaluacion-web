<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/roles', App\Http\Controllers\RolController::class);
Route::apiResource('/usuarios', App\Http\Controllers\UsuarioController::class);
Route::apiResource('/configuraciones', App\Http\Controllers\ConfiguracionController::class);
