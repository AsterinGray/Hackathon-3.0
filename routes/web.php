<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/add/user','HomeController@add')->name('user.add');
    Route::put('/payment/upload','HomeController@submitPayment');
});


Route::middleware('admin')->group(function(){
    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/edit/{user}','AdminController@edit')->name('admin.edit');
    Route::put('/update/{member}','AdminController@update')->name('admin.update');
    Route::get('/view/{user}','AdminController@view')->name('admin.view');
    Route::delete('/delete','AdminController@delete')->name('admin.delete');
    Route::post('/identity','AdminController@setBinusian')->name('admin.identity');
    Route::post('/payment','AdminController@setPayment')->name('admin.payment');
});
