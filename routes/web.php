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

Route::get('/', 'BookController@index');
//Route::get('/contacts', 'BookController@contact');
Route::get('/books', 'BookController@allBooks');

//Route::get('/users','DataTableController@getIndex');
//Route::get('/users.data','DataTableController@anyData')->name('users.data');
//
//Route::get('/books1','BookController@getIndex');
//Route::get('/books1.data','BookController@anyData')->name('books.data');


Route::get('/books/{book}', 'BookController@show')->name('single');
Route::post('/cart','BookController@addCart')->name('add');

Route::get('shop_cart', 'BookController@cart');
Route::get('/sortPrice', 'BookController@sortPrice');
Route::get('/sortName', 'BookController@sortName');
Route::get('/search', 'BookController@search');
Route::get('/contactUs','BookController@contact');
Route::post('/contactUs', 'BookController@contactUs')->name('contactUs');
Route::get('/searchlive', 'BookController@searchlive');



