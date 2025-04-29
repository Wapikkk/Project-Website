<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\AuthenticationController;
use App\Models\Vacation;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnArgument;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     return view('home');
// });

// Route untuk Beranda
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/rekomendasi-wisata', function () {
//     return view('rekomendasi-wisata');
// });

// Route untuk Rekomendasi Wisata
Route::get('/rekomendasi-wisata', [VacationController::class, 'index'])->name('rekomendasi-wisata');

// Route untuk Autentikasi Login dan Registrasi
Route::get('/registrasi', [AuthenticationController::class, 'showRegisterForm',])->name('form.registrasi');
Route::post('/registrasi', [AuthenticationController::class, 'register'])->name('registrasi');
Route::get('/masuk', [AuthenticationController::class, 'showLoginForm'])->name('login');
Route::post('/masuk', [AuthenticationController::class, 'login'])->name('login');

Route::get('/katalog-barang', function(){
    return view('katalog-barang');
});

Route::get('/katalog-paket', function(){
    return view('katalog-paket');
});

Route::get('/katalog-trip', function(){
    return view('katalog-trip');
});

Route::get('/informasi-pemesanan', function(){
    return view('informasi-pemesanan');
});

Route::get('/masuk', function(){
    return view('login');
});

Route::get('/registrasi', function(){
    return view('registrasi');
});