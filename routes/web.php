<?php

use App\Http\Controllers\Auth\CreateCrontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [CreateCrontroller::class, 'create']);

Route::get('/register', function () {
    return view('register');
})->name('register');