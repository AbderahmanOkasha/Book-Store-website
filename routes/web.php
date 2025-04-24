<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/books-list', [BookController::class, 'index']);
