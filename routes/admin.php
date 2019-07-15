<?php


Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'Admin\UserController');
    Route::get('/',function (){
       return view('admin.dashboard');
    });
});
