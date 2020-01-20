<?php

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
    return view('welcome');
});
Route::get('/VaccinationCenters','VaccinationController@show');
Route::get('/send','VaccinationController@sendOrder');
Route::get('/receive','VaccinationController@receiveOrder');

Route::post('addchild', 'ChildController@store');
Route::post('getchild/{id}', 'ChildController@show');