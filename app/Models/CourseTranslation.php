<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class CourseTranslation extends Translation
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'locale',
        'name',
        'teaser',
        'description',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'name'   => TrimCast::class,
        'teaser' => TrimCast::class,
    ];
}
