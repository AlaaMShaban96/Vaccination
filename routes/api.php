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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 


Route::get('/news','Api\OrderController@index');//all vaccination

Route::get('/vaccination','Api\VaccinationController@index');//all vaccination

Route::get('/user','Api\UserController@index');//all vaccination

Route::get('/city','Api\CityController@index');//all city

Route::get('/city/{id}','Api\CityController@show');//user on this city

Route::get('/user/{id}','Api\UserController@show');// user with vaccination

Route::get('/vaccination/{id}','Api\VaccinationController@showUser');// all user have vaccination
