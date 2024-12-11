<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Dashboard', function () {
    return view('dashboard');
});
Route::get('/Register', function () {
    return view('register');
});
