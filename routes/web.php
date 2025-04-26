<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacationController;
use App\Models\Vacation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/rekomendasi-wisata', [VacationController::class, 'index'])->name('rekomendasi-wisata');

Route::get('/katalog-barang', function(){
    return view('katalog-barang');
});

Route::get('/katalog-paket', function(){
    return view('katalog-paket');
});

// Route Admin

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});