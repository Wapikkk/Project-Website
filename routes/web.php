<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', function() {
    return view('customer');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/rekomendasi-wisata', function(){
    return view('rekomendasi-wisata');
});