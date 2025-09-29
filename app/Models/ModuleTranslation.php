<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

final class ModuleTranslation extends Translation
{
    protected $fillable = [
        'locale',
        'name',
    ];

    protected $casts = [
        'name' => TrimCast::class,
    ];
}
