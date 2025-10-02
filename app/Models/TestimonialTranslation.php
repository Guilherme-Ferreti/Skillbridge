<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class TestimonialTranslation extends Translation
{
    protected $fillable = [
        'quote',
    ];

    protected $casts = [
        'quote' => TrimCast::class,
    ];
}
