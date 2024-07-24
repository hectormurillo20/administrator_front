<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthSessionController;

Route::get('/', function () {
    return view('welcome.login');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [AuthSessionController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/login', [AuthSessionController::class, 'index'])->name('login');