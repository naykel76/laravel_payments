<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/user/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth'])->name('user.dashboard');
