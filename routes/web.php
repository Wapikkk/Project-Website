<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\ReviewController;
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
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/katalog-barang', function(){
    return view('katalog-barang');
});

Route::get('/katalog-paket', function(){
    return view('katalog-paket');
});

Route::get('/katalog-trip', function(){
    return view('katalog-trip');
});

// Route untuk Informasi Pemesanan
Route::get('/informasi-pemesanan/{category?}', [InformationController::class, 'show'])->name('information.show');

// Route untuk Admin
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin')->name('admin.dashboard');

    Route::prefix('blog')->group(function () {
        Route::get('/', [VacationController::class, 'showBlogAdmin'])->name('admin.show.blog');
        Route::get('/detail/{id}', [VacationController::class, 'showBlogDetail'])->name('admin.detail.blog');
        Route::get('/tambah', [VacationController::class, 'showAddBlog'])->name('admin.add.blog');
        Route::post('/tambah', [VacationController::class, 'store'])->name('admin.add.blog.store');
        Route::delete('/detail/{id}', [VacationController::class, 'destroy'])->name('admin.blog.delete');
    });

    Route::prefix('testimoni')->group(function () {
        Route::get('/', [ReviewController::class, 'showReviewAdmin'])->name('admin.show.review');
        Route::get('/tambah', [ReviewController::class, 'showAddReview'])->name('admin.add.review');
        Route::post('/tambah', [ReviewController::class, 'store'])->name('admin.add.review.store');
        Route::delete('/detail/{id}', [ReviewController::class, 'destroy'])->name('admin.review.delete');
    });

    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
