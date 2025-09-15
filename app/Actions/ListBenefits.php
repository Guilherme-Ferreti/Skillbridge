<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Collection;

final class ListBenefits
{
    public function handle(): Collection
    {
        return collect(settings('benefits')->value)->map(fn (array $benefit, int $index) => [
            'number'      => mb_str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT),
            'title'       => $benefit['title_' . app()->getLocale()],
            'description' => $benefit['description_' . app()->getLocale()],
        ]);
    }
}
