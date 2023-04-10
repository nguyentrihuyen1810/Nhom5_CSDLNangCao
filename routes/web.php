<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;


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

Route::get('/', function ()
    {return view('home');});
//----------shop--------
Route::get('/shop', 'App\Http\Controllers\ProductController@index');
//-----------detail product-----------
Route::get('/shop/show/{name}', 'App\Http\Controllers\ProductController@show');
//----Login-----
Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');
//------admin------
Route::get('/admin', 'App\Http\Controllers\ProductController@list');
//-----edit product-----
Route::post('/admin/update/{name}', [ProductController::class,'update']);
Route::get('/admin/edit/{name}', [ProductController::class, 'edit']);
//----delete product----
Route::post('/delete/{name}', 'App\Http\Controllers\ProductController@delete');
//---profile customer----
Route::get('/profile/{username}', 'App\Http\Controllers\CustomerController@show');
//---edit profile---
Route::post('/profile/update/{username}', [CustomerController::class,'update']);
Route::get('/profile/edit/{username}', [CustomerController::class, 'edit']);



