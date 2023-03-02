<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'top'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
