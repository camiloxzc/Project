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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*rutas producto*/
/*Route::get('/ServiciosProductos/create', [App\Http\Controllers\ServicioProductoController::class, 'create']);*/
Route::group(['middleware' => 'auth'], function(){
    Route::resource('ServiciosProductos',ServicioProductoController::class);
    /*Route::post('/ServiciosProductos', [App\Http\Controllers\ServicioProductoController::class, 'store'])->name('ServiciosProductos.store');*/
});

/*rutas permisos*/
Route::group(['middleware' => 'auth'], function(){
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);

});

/*rutas roles*/
Route::group(['middleware' => 'auth'], function(){
    Route::resource('roles', App\Http\Controllers\RoleController::class);

});

/*rutas servicios*/



/*rutas agenda*/



/*rutas usuario*/



/*rutas profesionales*/



/*rutas clientes*/



/*rutas proveedores*/



/*rutas compras*/



/*rutas ventas*/
