<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::localizedGroup(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/courses', HomeController::class)->name('courses');
    Route::view('/about-us', 'pages.about-us')->name('about-us');
    Route::get('/pricing', HomeController::class)->name('pricing');
    Route::get('/contact', HomeController::class)->name('contact');
    Route::get('/sign-up', HomeController::class)->name('sign-up');
    Route::get('/login', HomeController::class)->name('login');
});
