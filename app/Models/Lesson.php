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

    public function durationAsHourText(): string
    {
        [$hours, $minutes] = explode(':', $this->duration);

        $hours   = (int) $hours;
        $minutes = (int) $minutes;

        $hoursText   = trans_choice(':value hour|:value hours', $hours, ['value' => $hours]);
        $minutesText = trans_choice(':value minute|:value minutes', $minutes, ['value' => $minutes]);

        if ($hours === 0) {
            return $minutesText;
        }

        if ($minutes === 0) {
            return $hoursText;
        }

        return $hoursText . ' ' . $minutesText;
    }
}
