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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/table1', function () {
    return view('table1');
});

Route::get('/table2', function () {
    return view('table2');
});

Route::get('/table3', function () {
    return view('table3');
});

Route::get('/table4', function () {
    return view('table4');
});

Route::post('/table1/booking', 'ReservationController@tab1');

Route::get('/table1', 'TableshowController@tab1');