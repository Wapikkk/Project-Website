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
})->name('admin.dashboard');

Route::get('/admin/blog', [VacationController::class, 'showBlogAdmin'])->name('admin.show.blog');
Route::get('/admin/blog/{id}', [VacationController::class, 'showBlogDetail'])->name('admin.detail.blog');
Route::get('/blog/add', [VacationController::class, 'showAddBlog'])->name('admin.add.blog');
Route::post('/blog/add', [VacationController::class, 'store'])->name('admin.add.blog.store');
Route::delete('/blog/{id}', [VacationController::class, 'destroy'])->name('admin.blog.delete');