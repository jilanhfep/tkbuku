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

Route::post('distributor/search', 'distributorController@search');
Route::resource('distributor', 'distributorController');

Route::resource('pasok', 'pasokController');

Route::resource('buku', 'bukuController');

Route::resource('penjualan', 'penjualanController');

