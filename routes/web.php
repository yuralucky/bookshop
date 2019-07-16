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

Route::get('/', 'BookController@index')->name('main');
//Route::get('/contacts', 'BookController@contact');
Route::get('/books', 'BookController@allBooks');
Route::get('/delivery', 'BookController@delivery');
Route::get('/cart/confirmOrder','BookController@confirmOrder')->name('order');
Route::post('/cart/confirmOrder','BookController@createOrder')->name('createOrder');

Route::get('/books/{book}', 'BookController@show')->name('single');
Route::post('/cart','BookController@addCart')->name('add');

Route::get('/cart', 'BookController@cart');
Route::get('/sortPrice', 'BookController@sortPrice');
Route::get('/sortName', 'BookController@sortName');
Route::get('/search', 'BookController@search');
Route::get('/contactUs','BookController@contact');
Route::post('/contactUs', 'BookController@contactUs')->name('contactUs');




