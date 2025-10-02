<?php

declare(strict_types=1);

use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/home', HomePageController::class)->name('api.home');
Route::get('/faq', FaqController::class)->name('api.faq');
