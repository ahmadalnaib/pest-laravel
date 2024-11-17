<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterIndexController;



Route::get('/',HomeController::class)->name('home');

Route::get('/register', RegisterIndexController::class)->name('register.index');