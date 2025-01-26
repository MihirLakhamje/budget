<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register_store');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login_store');

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');
