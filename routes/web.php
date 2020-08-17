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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home-fe');
});

Route::get('/register', function () {
    return view('register-fe');
});

Route::get('/login', function () {
    return view('login-fe');
});

Route::get('/user',function(){
    return view('user-dashboard');
});

Route::get('/admin',function(){
    return view('admin-panel');
});

Route::get('admin-edit',function() {
    return view('admin-edit');
});

Route::get('admin-view',function() {
    return view('admin-view');
});