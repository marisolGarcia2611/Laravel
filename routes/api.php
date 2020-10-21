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

/////////Solo vistas de las tablas
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
/////////////////////////////

///////Actualizar tabla productos
Route::put('updateProduct/{id}','ProductsController@actualizar');
Route::put('updateComent/{id}','ComentController@actualizar');

//get--http://127.0.0.1:8000/api/mostrarProduct
//get--http://127.0.0.1:8000/api/mostrarComent
//post--http://127.0.0.1:8000/api/insertComent
//post--http://127.0.0.1:8000/api/insertProduct
//post--http://127.0.0.1:8000/api/matchComentProducts
//post--http://127.0.0.1:8000/api/matchProductCost
//post--http://127.0.0.1:8000/api/deleteComent
//post--http://127.0.0.1:8000/api/deleteProduct
//put---http://127.0.0.1:8000/api/updateProduct/id
//put---http://127.0.0.1:8000/api/updateComent/id

