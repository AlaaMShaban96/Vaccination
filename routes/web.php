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
Route::view('/', 'index.index');

Route::view('/app', 'index.app');

Route::view('/myChildrenInfo', 'index.Pricing');

Route::view('/about', 'index.contact');

Route::get('/infoChildToPublic', 'ChildController@showChildToPublic');



Route::middleware(['auth'])->group(function () {

    Route::middleware(['user'])->group(function () {

        Route::get('/user/index','VaccinationController@show');
        Route::get('/user/reports','VaccinationController@show_reports');

        // Route::view('/user/reports', 'VaccinationCenters.reports');

        Route::get('/my-vaccination-available','VaccinationController@showVaccinationAvailable');


        Route::get('/send','OrderController@sendOrder');

        Route::get('/orders','OrderController@show');

        Route::get('/receive','OrderController@receiveOrder');

        Route::post('/add-order', 'OrderController@store');

        Route::post('/accept-order/{id}', 'OrderController@update');


        Route::post('/add-child', 'ChildController@store');

        Route::post('/delete-Child/{child}', 'ChildController@destroy');

        Route::post('/children/edit/child', 'ChildController@update');

        Route::get('/getchild', 'ChildController@show');

        Route::get('/infochild', 'ChildController@showChild');

        Route::get('/infochildren', 'ChildController@showChildren');


        Route::post('/takedose', 'ChildfileController@take_a_dose');

        Route::post('/takedose-childfile', 'ChildfileController@store');


        Route::get('/user-profile','UserController@show');
        Route::post('/user-profile/edit/update','UserController@update');

        Route::group(['prefix' => '/report'], function () {

            Route::get('/orders-PDF','PDFController@userOrders');
            Route::get('/child-PDF','PDFController@child_PDF');
            Route::get('/avalibel-vaccin-PDF','PDFController@avalibel_vaccin_PDF');


        });




        });





    // *********** admin routes *********
    Route::middleware(['admin'])->group(function () {

        Route::get('/admin/index','AdminController@index');


        Route::get('/users','UserController@index');
        Route::post('/add-user','UserController@store');
        Route::post('/update-user/{id}','UserController@updateAdmin');
        Route::post('/disactive-user/{id}','UserController@destroy');
        Route::post('/active-user/{id}','UserController@active');


        Route::get('/Vaccinations', 'VaccinationController@index');

        Route::post('/add-vaccinations','VaccinationController@store');

        Route::post('/update-vaccinations/{id}','VaccinationController@update');



        Route::get('/cities','CityController@index');

        Route::post('/add-city','CityController@store');

        Route::post('/update-city/{id}','CityController@update');


        Route::get('/requests','OrderController@index');
    Route::post('/accept_order/{id}','OrderController@accept');
    Route::post('/send_order','OrderController@send');


            Route::get('/reports', function () {
                return view('admin/reports');
            });
                });
    });


Route::post('send-password','PasswordController@sendPassword');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
