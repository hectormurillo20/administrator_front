<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome.login');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');