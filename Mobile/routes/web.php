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
    return view('user/login');
});
Route::get('/register', function () {
    return view('user/register');
});

//user
Route::post('/checkLogin', 'App\Http\Controllers\UserController@checkLogin');
Route::post('/addregister', 'App\Http\Controllers\UserController@addregister');
Route::get('/logout', 'App\Http\Controllers\UserController@checklogout');
//quan ly user
Route::get('/userad', 'App\Http\Controllers\UserAdController@users');



Route::get('/profile/{username}', 'App\Http\Controllers\CustomerController@show');
//---edit profile---
Route::post('/profile/update/{username}', 'App\Http\Controllers\CustomerController@update');
Route::get('/profile/edit/{username}','App\Http\Controllers\CustomerController@edit');



Route::get('/shop', 'App\Http\Controllers\ProductController@index');
Route::get('/shopus', 'App\Http\Controllers\ProductController@indexus');
Route::get('/shopad', 'App\Http\Controllers\ProductadController@indexad');
Route::get('/Revenue', 'App\Http\Controllers\ProductadController@revenue');
//thêm san phẩm
Route::post('/addproduct', 'App\Http\Controllers\ProductadController@addproduct');

Route::get('/addcreate', function () {
    return view('addcreate');
});

//tìm kiếm sản phẩm bên user
Route::post('/search','App\Http\Controllers\SearchController@search');
Route::post('/searchus','App\Http\Controllers\SearchusController@searchus');
// Route::get('list', 'App\Http\Controllers\ProductController@index');\

//Cap nhật sản phẩm
Route::post('/update/{name}', 'App\Http\Controllers\ProductadController@update');
Route::get('/edit/{name}','App\Http\Controllers\ProductadController@edit');

// Route::get('shop', 'App\Http\Controllers\ProductController@index');
//show sp ben admin
Route::get('showad/{name}', 'App\Http\Controllers\ProductadController@showad');
//show sp ben user
Route::get('show/{name}', 'App\Http\Controllers\ProductController@show');
Route::get('showus/{name}', 'App\Http\Controllers\ProductController@showus');
Route::get('showuser/{id}', 'App\Http\Controllers\UserAdController@showuser');
Route::get('/delete/{prdname}', 'App\Http\Controllers\ProductadController@delete');
Route::get('/deleteuser/{id}', 'App\Http\Controllers\UserAdController@delete');

// Route::get('/productmanagement', function () {
//     return view('productmanagement');
// });


// Route::get('/shop', 'App\Http\Controllers\ProductController@index');
// Route::get('/shopad', 'App\Http\Controllers\ProductadController@indexad');
//  Route::get('/shopad/{id}', 'App\Http\Controllers\ProductadController@showad');

// Route::get('/login', 'App\Http\Controllers\LoginController@create');
// Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');
// Route::get('/register', 'App\Http\Controllers\RegisterController@create');
// Route::post('/addregister', 'App\Http\Controllers\RegisterController@addregister');



// Route::get('/add', 'App\Http\Controllers\LogoutController@create');

Route::get('/search', function (){
    return view('search');
});
Route::get('/searchus', function (){
    return view('searchus');
});
// Route::post('/search','App\Http\Controllers\SearchController@search');

//---profile customer----
Route::get('/profile/{username}', 'App\Http\Controllers\CustomerController@show');
//---edit profile---
Route::post('/profile/update/{username}', [CustomerController::class,'update']);
Route::get('/profile/edit/{username}', [CustomerController::class, 'edit']);


//---cart---
Route::get('/cart', 'App\Http\Controllers\CartController@index');



//---Delete cart---
Route::get('/deleteCart/{id}', 'App\Http\Controllers\CartController@deleteCart');
Route::get('/suCart/{id}', 'App\Http\Controllers\CartController@suCart');
Route::post('/udCart/{id}', 'App\Http\Controllers\CartController@udCart');

