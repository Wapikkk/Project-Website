<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/customer', function() {
    return view('customer');
});

Route::redirect('/home', '/customer', 301);