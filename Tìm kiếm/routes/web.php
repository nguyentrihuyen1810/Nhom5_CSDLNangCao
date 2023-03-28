<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/search', function (){
    return view('search');
});
Route::post('/search','App\Http\Controllers\SearchController@search');