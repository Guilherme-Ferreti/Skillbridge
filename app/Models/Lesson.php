<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use LaravelLang\Models\HasTranslations;

final class Lesson extends Model
{
    use HasTranslations, HasUlids;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'duration',
    ];

    /**
     * @return BelongsTo<Module, $this>
     */
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }
}
