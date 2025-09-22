<?php

declare(strict_types=1);

namespace App\Actions;

final class ListPlans
{
    public function handle(): array
    {
        $plans = settings('plans')->value;

        return [
            'free' => [
                'name'             => $plans['free']['name'][app()->getLocale()],
                'price_per_month'  => $plans['free']['price_per_month'],
                'price_per_year'   => $plans['free']['price_per_year'],
                'features'         => $plans['free']['features'][app()->getLocale()],
                'missing_features' => $plans['free']['missing_features'][app()->getLocale()],
            ],
            'pro' => [
                'name'             => $plans['pro']['name'][app()->getLocale()],
                'price_per_month'  => $plans['pro']['price_per_month'],
                'price_per_year'   => $plans['pro']['price_per_year'],
                'features'         => $plans['pro']['features'][app()->getLocale()],
                'missing_features' => $plans['pro']['missing_features'][app()->getLocale()],
            ],
        ];
    }
}
