<?php

declare(strict_types=1);

namespace App\Providers;

use App\Actions\ListFaq;
use App\Actions\ListPlans;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

final class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer('layouts.faq', fn (View $view) => $view->with('faq', app(ListFaq::class)->handle()));
        Facades\View::composer('layouts.plans', fn (View $view) => $view->with('plans', app(ListPlans::class)->handle()));
    }
}
