<?php


Route::group(['prefix' => 'admin'], function () {
    Route::resource('abook', 'Admin\AdminController');
    Route::get('index1', function () {
        return view('admin.index1');
    });
    Route::get('abook/getdata', 'Admin\AdminController@getdata')->name('getdata');
    Route::get('/', function () {
        return view('admin.layouts.layouts');
    });
});