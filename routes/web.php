<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('web.user.pages.index');
})->name('home.index');

