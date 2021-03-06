<?php

use Illuminate\Http\Request;

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

//penerapan route untuk ujicoba rest api di postman
Route::get('/barang', 'ApiController@index');
Route::post('/barang', 'ApiController@create');
Route::put('/barang/{id}', 'ApiController@update');
Route::delete('/barang/{id}', 'ApiController@delete');
