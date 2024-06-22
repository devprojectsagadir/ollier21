<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/public', function () {
    return redirect('/');
});

Route::get('/login', function () {
    return "test";
});
