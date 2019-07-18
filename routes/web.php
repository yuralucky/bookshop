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
require 'admin.php';

Route::get('/', 'MainController@index')->name('main');
//Route::get('/contacts', 'MainController@contact');
Route::get('/books', 'MainController@allBooks');
Route::get('/delivery', 'MainController@delivery');
Route::get('/cart/confirmOrder','MainController@confirmOrder')->name('order');
Route::post('/cart/confirmOrder','MainController@createOrder')->name('createOrder');

Route::get('/books/{book}', 'MainController@show')->name('single');
Route::post('/cart','MainController@addCart')->name('add');

Route::get('/cart', 'MainController@cart');
Route::get('/sortPrice', 'MainController@sortPrice');
Route::get('/sortName', 'MainController@sortName');
Route::get('/search', 'MainController@search');
Route::get('/contactUs','MainController@contact');
Route::post('/contactUs', 'MainController@contactUs')->name('contactUs');




