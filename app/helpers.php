<?php

declare(strict_types=1);

if (! function_exists('lroute')) {
    /**
     * Generate a localized URL to a named route.
     */
    function lroute(string $name, array $parameters = [], bool $absolute = true): string
    {
        $locale = app()->getLocale();

        if ($locale === 'en') {
            return route($name, $parameters, $absolute);
        }

        $parameters = array_merge($parameters, ['locale' => $locale]);

        return localizedRoute($name, $parameters, $absolute);
    }
}
