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
Route::resource('home', 'HomeController');
Route::get('/','HomeController@index');

Route::resource('products', 'ProductsController');
Route::get('/products','ProductsController@index');

Route::resource('suppliers', 'SuppliersController');
Route::get('/suppliers','SuppliersController@index');
