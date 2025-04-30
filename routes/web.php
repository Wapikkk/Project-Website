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


// Route untuk Beranda
Route::get('/home', [HomeController::class, 'index'])->name('home');

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

// Route Admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/blog', [VacationController::class, 'showBlogAdmin'])->name('admin.show.blog');
Route::get('/admin/blog/{id}', [VacationController::class, 'showBlogDetail'])->name('admin.detail.blog');
Route::get('/blog/add', [VacationController::class, 'showAddBlog'])->name('admin.add.blog');
Route::post('/blog/add', [VacationController::class, 'store'])->name('admin.add.blog.store');
Route::delete('/blog/{id}', [VacationController::class, 'destroy'])->name('admin.blog.delete');
