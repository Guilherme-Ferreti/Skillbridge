<?php

declare(strict_types=1);

use App\Enums\Locale;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if (! function_exists('lroute')) {
    /**
     * Generate a localized URL to a named route.
     */
    function lroute(string $name, array $parameters = [], bool $absolute = true): string
    {
        $locale = app()->getLocale();

        if ($locale === Locale::ENGLISH->value) {
            return route($name, $parameters, $absolute);
        }

        $parameters = array_merge($parameters, ['locale' => $locale]);

        return localizedRoute($name, $parameters, $absolute);
    }
}

if (! function_exists('route_is')) {
    /**
     * Determine if the current route matches a given name ignoring the locale.
     */
    function route_is(string $name): bool
    {
        $name             = Str::remove('localized.', $name);
        $currentRouteName = Str::remove('localized.', Route::currentRouteName());

        return $currentRouteName === $name;
    }
}
