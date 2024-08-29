<?php

use Illuminate\Support\Facades\Route;


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


Route::get('/kursus', function () {
    return view('kursus', ['title' => 'Kursus']);
});

?>
