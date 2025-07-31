<?php

declare(strict_types=1);

use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', HomeController::class)->name('api.home.show');
