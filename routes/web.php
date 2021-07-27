<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioProductoController;

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
    return view('welcome2');
});
Route::get('create', function () {
    return "Estoy dentro";
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ServiciosProductos/create', [App\Http\Controllers\ServicioProductoController::class, 'create']);
