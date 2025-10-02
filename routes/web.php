<?php

declare(strict_types=1);

use App\Http\Controllers\BenefitsPageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\StoreContactController;
use App\Http\Controllers\TestimonialsPageController;
use Illuminate\Support\Facades\Route;

Route::localizedGroup(function () {
    Route::get('/', HomePageController::class)->name('home');

    Route::view('/about-us', 'pages.about-us')->name('about-us');
    Route::view('/pricing', 'pages.pricing')->name('pricing');

    Route::get('/benefits', BenefitsPageController::class)->name('benefits');
    Route::get('/testimonials', TestimonialsPageController::class)->name('testimonials');

    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course:slug}', [CourseController::class, 'show'])->name('courses.show');

    Route::view('/contact', 'pages.contact-us')->name('contact');
    Route::post('/contact', StoreContactController::class)->name('contact.store');

    Route::redirect('/sign-up', 'https://laracasts.com/')->name('sign-up');
    Route::redirect('/login', 'https://laracasts.com/')->name('login');
});
