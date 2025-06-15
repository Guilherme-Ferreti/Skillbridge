<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/courses', HomeController::class)->name('courses');
Route::get('/about-us', HomeController::class)->name('about-us');
Route::get('/pricing', HomeController::class)->name('pricing');
Route::get('/contact', HomeController::class)->name('contact');
