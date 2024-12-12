<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('userDashBoard');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
