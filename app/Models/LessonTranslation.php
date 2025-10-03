<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class LessonTranslation extends Translation
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'locale',
        'name',
    ];

    /**
     * @return array<string, string>
     */
    protected $casts = [
        'name' => TrimCast::class,
    ];
}
