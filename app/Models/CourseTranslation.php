<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class CourseTranslation extends Translation
{
    protected $fillable = [
        'locale',
        'name',
        'teaser',
        'slug',
    ];

    protected $casts = [
        'name'   => TrimCast::class,
        'teaser' => TrimCast::class,
        'slug'   => TrimCast::class,
    ];
}
