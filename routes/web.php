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

Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');
Route::get('/register', 'App\Http\Controllers\RegisterController@create');
Route::post('/addregister', 'App\Http\Controllers\RegisterController@addregister');

Route::get('/logout', 'App\Http\Controllers\LogoutController@create');
Route::post('/checklogout', 'App\Http\Controllers\LogoutController@checklogout');