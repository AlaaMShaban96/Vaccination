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
Route::get('/vaccinationCenters','VaccinationController@show');
Route::get('/reports','VaccinationController@show_reports');
Route::get('/my-vaccination-available','VaccinationController@showVaccinationAvailable');


Route::get('/send','OrderController@sendOrder');
Route::get('/receive','OrderController@receiveOrder');
Route::post('/add-order', 'OrderController@store');
Route::post('/accept-order/{id}', 'OrderController@update');


Route::post('/add-child', 'ChildController@store');
Route::post('/delete-Child/{child}', 'ChildController@destroy');
Route::post('/children/edit/child', 'ChildController@update');
Route::post('/getchild/{id}', 'ChildController@show');
Route::get('/infochild/{id}', 'ChildController@showChild');
Route::get('/infochildren', 'ChildController@showChildren');


Route::post('/takedose', 'ChildfileController@take_a_dose');
Route::post('/takedose-childfile', 'ChildfileController@take_a_dose_to_childfile');



