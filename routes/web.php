<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

//user 
Route::post('/checkLogin', 'App\Http\Controllers\UserController@checkLogin');
Route::post('/addregister', 'App\Http\Controllers\UserController@addregister');
//quan ly user 
Route::get('/userad', 'App\Http\Controllers\UserAdController@users');
// Route::delete('/customer/{id}', 'App\Http\Controllers\UserAdController@destroy')->name('customer.delete');
Route::get('customer/delete/{id}', 'App\Http\Controllers\UserAdController@delete')->name('customer.delete');



Route::get('/shop', 'App\Http\Controllers\ProductController@index');
Route::get('/shopad', 'App\Http\Controllers\ProductadController@indexad');
Route::post('/addproduct', 'App\Http\Controllers\ProductadController@addproduct');
Route::post('/search','App\Http\Controllers\SearchController@search');

// Route::get('/productmanagement', function () {
//     return view('productmanagement');
// });

Route::get('/addcreate', function () {
    return view('addcreate');
});


// Route::get('/shop', 'App\Http\Controllers\ProductController@index');
// Route::get('/shopad', 'App\Http\Controllers\ProductadController@indexad');
//  Route::get('/shopad/{id}', 'App\Http\Controllers\ProductadController@showad');

// Route::get('/login', 'App\Http\Controllers\LoginController@create');
// Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');
// Route::get('/register', 'App\Http\Controllers\RegisterController@create');
// Route::post('/addregister', 'App\Http\Controllers\RegisterController@addregister');

// Route::get('/logout', 'App\Http\Controllers\LogoutController@create');
// Route::post('/checklogout', 'App\Http\Controllers\LogoutController@checklogout');

// Route::get('/add', 'App\Http\Controllers\LogoutController@create');

Route::get('/search', function (){
    return view('search');
});
// Route::post('/search','App\Http\Controllers\SearchController@search');