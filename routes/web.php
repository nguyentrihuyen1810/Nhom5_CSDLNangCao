<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller\ProductController;
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


Route::get('shop', 'App\Http\Controllers\ProductController@index');
Route::get('/shop/show/{name}', [ProductController::class, 'show']);
