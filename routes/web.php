<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\micoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;


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

Route::get('/', function () {
    return view('menu');
});

Route::get('/menu', [micoController::class,'hola']);

Route::get('/productos', [ProductosController::class, 'arroz']);

Route::get('/ventas', [VentasController::class, 'muestra']);
