<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;


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
//-----home------
Route::get('/home', function ()
{return view('home');});
//----blog-----
Route::get('/blog', function ()
{return view('blog');});
//----------shop--------
Route::get('/shop', 'App\Http\Controllers\ProductController@index');
//-------detail product-----------
Route::get('/shop/show/{name}', 'App\Http\Controllers\ProductController@show');
//----Login-----
Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');
//---register---
Route::get('/register', function ()
{return view('register');});
Route::post('/register', 'App\Http\Controllers\RegisterController@register');
//------admin------
Route::get('/admin', 'App\Http\Controllers\ProductController@list');
//list of Users
Route::get('/listUser', 'App\Http\Controllers\CustomerController@index');
//-----delete Users---
Route::post('/destroy/{id}', 'App\Http\Controllers\CustomerController@destroy');
//----add Users----
Route::get('/createUser', function ()
{return view('admin.createUser');});
//-----edit product-----
Route::post('/admin/update/{id}', [ProductController::class,'update']);
Route::get('/admin/edit/{id}', [ProductController::class, 'edit']);
//----delete product----
Route::post('/delete/{id}', 'App\Http\Controllers\ProductController@delete');
//---add product---
Route::get('/createProduct', function ()
{return view('admin.createProduct');});
Route::post('/add', 'App\Http\Controllers\ProductController@create');
//---profile customer----
Route::get('/profile/{id}', 'App\Http\Controllers\CustomerController@show');
//---edit profile---
Route::post('/profile/update/{id}', [CustomerController::class,'update']);
Route::get('/profile/edit/{id}', [CustomerController::class, 'edit']);
//---search product----
Route::get('/search', function (){
    return view('product.search');
});
Route::post('/search','App\Http\Controllers\ProductController@search');




