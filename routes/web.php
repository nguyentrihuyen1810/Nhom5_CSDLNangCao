<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControllers;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
}); 
Route::get('/home', function (){
    return view('home');
});

Route::get('/register', 'App\Http\Controllers\RegisterController@create');
Route::post('/addregister', 'App\Http\Controllers\RegisterController@addregister');

Route::get('/admin', 'App\Http\Controllers\ProductController@admin');
Route::post('/delete', 'App\Http\Controllers\ProductController@delete');