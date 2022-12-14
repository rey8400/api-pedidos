<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/productos', [App\Http\Controllers\ProductsController::class, 'index']);
Route::resource('productos',App\Http\Controllers\ProductoController::class);
Route::resource('pedido',App\Http\Controllers\PedidoController::class);
Route::resource('detallepedido',App\Http\Controllers\DetallePedidoController::class);
Route::resource('categorias',App\Http\Controllers\CategoriaController::class);
Route::get('pedido/search/{id}',[App\Http\Controllers\PedidoController::class,'search']);
Route::get('detallepedido/search/{id}',[App\Http\Controllers\DetallePedidoController::class,'search']);
Route::get('productos/categoria/{filtro}',[App\Http\Controllers\ProductoController::class,'filtro']);
Route::get('categoria/nombre/{filtro}',[App\Http\Controllers\CategoriaController::class,'filtro']);

/*Route::group(['prefix'=>'api', 'as' => "api."],function(){

    
});*/
