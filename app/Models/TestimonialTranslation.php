<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class TestimonialTranslation extends Translation
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'quote',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'quote' => TrimCast::class,
    ];
}
