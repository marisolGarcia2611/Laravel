<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductsController;
use app\Http\Controllers\ComentController;


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

//(Route::middleware('auth:api')->get('/user', function (Request $request) {
 //   return $request->user();
//});
/////////Solo vistas 
Route::get('mostrarComent/{id?}','ComentController@vista');
Route::get('mostrarProduct/{id?}','ProductsController@vista');

////////////introducir más informcaión
Route::post('insertComent','ComentController@insertar');
Route::post('insertProduct','ProductsController@insertar');

////////Relaciones entre tablas
Route::get('matchComentProducts','ComentController@relacion');
Route::get('matchProductCost','ProductsController@relacionPrecio');

////////Eliminar registros
Route::delete('deleteComent','ComentController@eliminar');
Route::delete('deleteProduct','ProductsController@eliminar');


//http://127.0.0.1:8000/api/mostrarProduct
//http://127.0.0.1:8000/api/mostrarComent
//http://127.0.0.1:8000/api/insertComent
//http://127.0.0.1:8000/api/insertProduct
//http://127.0.0.1:8000/api/matchComentProducts
//http://127.0.0.1:8000/api/matchProductCost
//http://127.0.0.1:8000/api/deleteComent
//http://127.0.0.1:8000/api/deleteProduct

