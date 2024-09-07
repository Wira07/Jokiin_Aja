<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;


Route::get('/', function () {
    return view('home',  ['title' => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Wira Sukma Saputra']);
});

Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Artikel']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/blog', [BlogController::class, 'index']);

// Route dengan wildcard untuk menangkap semua judul artikel
// Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{id}', [BlogDetailController::class, 'show'])->name('blog.show');


Route::get('/kursus', function () {
    return view('kursus', ['title' => 'Kursus']);
});
