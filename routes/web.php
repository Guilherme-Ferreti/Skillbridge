<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/courses', fn () => view('pages.home'))->name('courses');
Route::get('/about-us', fn () => view('pages.home'))->name('about-us');
Route::get('/pricing', fn () => view('pages.home'))->name('pricing');
Route::get('/contact', fn () => view('pages.home'))->name('contact');
