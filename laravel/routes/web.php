<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/greeting', function () {
    return 'Hello World Antonio Garza Lozano 2024';
});

Route::get('/user', [UserController::class, 'index']);

Route::resource('books', BookController::class);
