<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/{anypath}','HomeController@index')->where('path','.*');

Route::get('/customers', 'CustomerController@all_customer');

Route::post('/savecustomer', 'CustomerController@save_customer');

Route::get('/deletecustomer/{id}', 'CustomerController@delete_customer');

Route::get('/customer/{id}', 'CustomerController@single_customer');

Route::post('/updatepost/{id}', 'CustomerController@update_customer');
