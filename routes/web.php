<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.welcome');
})->name('home');
