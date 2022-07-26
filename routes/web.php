<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmbarcacionController;
use App\Http\Controllers\EmbxProController;
use App\Http\Controllers\EmbxPuertoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SerxPuertoController;
use App\Http\Controllers\TipoEmbarcacionController;
use App\Http\Controllers\TipoxPuertoController;
use App\Http\Controllers\PuertoController;

Route::controller(EmbarcacionController::class)->group(function(){
    Route::get('embarcaciones', 'index');
    Route::get('embarcaciones/buscar/{id}', 'show');
    Route::post('embarcaciones/guardar','store');
    Route::put('embarcaciones/modificar/{id}','update');
    Route::delete('embarcaciones/eliminar/{id}','destroy');
});

Route::controller(PropietarioController::class)->group(function(){
    Route::get('propietarios', 'index');
    Route::get('propietarios/buscar/{id}', 'show');
    Route::post('propietarios/guardar','store');
    Route::put('propietarios/modificar/{id}','update');
    Route::delete('propietarios/eliminar/{id}','destroy');
});

Route::controller(PuertoController::class)->group(function(){
    Route::get('puertos', 'index');
    Route::get('puertos/buscar/{id}', 'show');
    Route::post('puertos/guardar','store');
    Route::put('puertos/modificar/{id}','update');
    Route::delete('puertos/eliminar/{id}','destroy');
});

Route::controller(ServicioController::class)->group(function(){
    Route::get('servicios', 'index');
    Route::post('servicios/guardar','store');
    Route::delete('servicios/eliminar/{id}','delete');
});

Route::controller(TipoEmbarcacionController::class)->group(function(){
    Route::get('tipoemb', 'index');
    Route::post('tipoemb/guardar','store');
    Route::delete('tipoemb/eliminar/{id}','delete');
});