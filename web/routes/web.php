<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('list', 'App\Http\Controllers\ProductController@index');
//Route::post('/list/edit/{name}', [ProductController::class, 'edit']);
Route::post('/list/update/{name}', [ProductController::class,'update']);
Route::get('/list/edit/{name}', [ProductController::class, 'edit']);
//Route::get('/list/update/{name}', [ProductController::class,'update']);

