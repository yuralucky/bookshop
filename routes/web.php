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
    return view('index');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/image', function () {
    return view('layout1');
});

Route::get('/main', 'BookController@index');
Route::get('shop_cart', function () {
    return view('shop_cart');
});
Route::get('/single', function () {
    return view('single');
});