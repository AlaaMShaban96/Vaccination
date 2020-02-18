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


Route::get('/news','Api\OrderController@index');

Route::get('/vaccination','Api\VaccinationController@index');

Route::get('/user','Api\UserController@index');

Route::get('/city','Api\CityController@index');

Route::get('/city/{id}','Api\CityController@show');

Route::get('/user/{user}','Api\UserController@show');

Route::get('/child/{child}','Api\ChildrenController@show');

Route::get('/vaccination/{vaccination}','Api\VaccinationController@showUser');

