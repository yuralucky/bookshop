<?php


Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'Admin\UserController');

    Route::get('/feedback','Admin\MainController@index');
    Route::delete('/feedback/{id}','Admin\MainController@delete')->name('feedback.destroy');
    Route::get('/',function (){
       return view('admin.dashboard');
    });
});
