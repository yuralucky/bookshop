<?php


Route::group(['prefix' => 'admin'], function () {

    Route::resource('/users', 'Admin\UserController');
    Route::resource('/orders', 'Admin\OrderController');
    Route::resource('/books','Admin\BookController');

    Route::get('/feedback', 'Admin\FeedbackController@index')->name('feedback');
    Route::delete('/feedback/{id}', 'Admin\FeedbackController@delete')->name('feedback.destroy');

    Route::get('/', 'Admin\AdminController@index');

});
