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
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/image', function () {
    return view('layout1');
});

Route::get('/main', 'BookController@main');
Route::get('shop_cart', function () {
    return view('shop_cart');
});
Route::get('/single', 'BookController@show');
Route::get('/cart','BookController@addCart');

Route::get('shop_cart', 'BookController@cart');
Route::get('/sortPrice', 'BookController@sortPrice');
Route::get('/sortName', 'BookController@sortName');
Route::get('/search', 'BookController@search');
Route::post('send', 'BookController@send')->name('sendmail');
Route::get('/searchlive', 'BookController@searchlive');
Route::get('test', 'TestController@index');
Route::post('/store', 'TestController@store')->name('store');

//admin route

//Route::view('/admin','admin.dashboard.index');