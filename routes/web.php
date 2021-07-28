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
Route::get('/ServiciosProductos/create', [App\Http\Controllers\ServicioProductoController::class, 'create']);


/*rutas roles*/


/*rutas servicios*/



/*rutas agenda*/



/*rutas usuario*/



/*rutas profesionales*/



/*rutas clientes*/



/*rutas proveedores*/



/*rutas compras*/



/*rutas ventas*/
