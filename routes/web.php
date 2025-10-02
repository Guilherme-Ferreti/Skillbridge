<?php

declare(strict_types=1);

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreContactController;
use Illuminate\Support\Facades\Route;

Route::localizedGroup(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course:slug}', [CourseController::class, 'show'])->name('courses.show');
    Route::view('/about-us', 'pages.about-us')->name('about-us');
    Route::view('/pricing', 'pages.pricing')->name('pricing');
    Route::view('/contact', 'pages.contact-us')->name('contact');
    Route::post('/contact', StoreContactController::class)->name('contact.store');
    Route::get('/sign-up', HomeController::class)->name('sign-up');
    Route::get('/login', HomeController::class)->name('login');
});
