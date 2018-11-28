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

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/table1', 'TableshowController@tab1');
Route::get('/table2', 'TableshowController@tab2');
Route::get('/table3', 'TableshowController@tab3');
Route::get('/table4', 'TableshowController@tab4');

Route::post('/table1/booking', 'ReservationController@tab1');
Route::post('/table2/booking', 'ReservationController@tab2');
Route::post('/table3/booking', 'ReservationController@tab3');
Route::post('/table4/booking', 'ReservationController@tab4');

