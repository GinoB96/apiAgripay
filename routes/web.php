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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(EmbarcacionController::class)->group(function(){
    Route::get('/embarcaciones', 'index');
    Route::post('/embarcaciones/guardar','store');
    Route::post('/embarcaciones/modificar','update');
    Route::post('/embarcaciones/eliminar','delete');
});

Route::controller(PropietarioController::class)->group(function(){
    Route::get('/Propietario', 'index');
    Route::post('/Propietario/guardar','store');
    Route::post('/Propietario/modificar','update');
    Route::post('/Propietario/eliminar','delete');
});

Route::controller(PuertoController::class)->group(function(){
    Route::get('/Puerto', 'index');
    Route::post('/Puerto/guardar','store');
    Route::post('/Puerto/modificar','update');
    Route::post('/Puerto/eliminar','delete');
});

Route::controller(ServicioController::class)->group(function(){
    Route::get('/Servicio', 'index');
    Route::post('/Servicio/guardar','store');
    Route::post('/Servicio/modificar','update');
    Route::post('/Servicio/eliminar','delete');
});
