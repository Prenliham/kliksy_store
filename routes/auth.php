<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::middleware('guest')->group(function(){
    // login 
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    // register 
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

// logout 
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');