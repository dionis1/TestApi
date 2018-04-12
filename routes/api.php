<?php

use Illuminate\Http\Request;
use App\Produkt;
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



 
Route::get('/products', 'ProduktController@index');
Route::get('/products/{produkt}', 'ProduktController@show');
Route::post('/products', 'ProduktController@store');
Route::put('/products/{produkt}', 'ProduktController@update');
Route::delete('/products/{produkt}', 'ProduktController@delete');

Route::fallback(function(){
    return response()->json(['message' => 'URL NOT FOUND!'], 404);
});
	