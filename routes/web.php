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
Route::get('/VaccinationCenters', function () {
    return view('VaccinationCenters.index');
});
Route::get('/management', function () {
    return view('VaccinationCenters.management');
});
Route::post('/postajax', function () {
   
    // $response = array(
    //     'status' => 'success',
    //     'msg' => $request->message,
    // );
    // return Response::json(Request::all());
    //  return response()->json($request->all(),200); 
    return "done";
})->name('login');
Route::post('/addchild', 'ChildController@store');