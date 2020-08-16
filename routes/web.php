<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/view/{user}','AdminController@view')->name('admin.view');
    Route::delete('/delete/{user}','AdminController@delete')->name('admin.delete');
});

