<?php

use Illuminate\Support\Facades\Route;

Route::get('/userad', 'App\Http\Controllers\UserAdController@users');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});