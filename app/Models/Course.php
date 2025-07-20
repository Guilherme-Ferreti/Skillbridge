<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CourseSkillLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use LaravelLang\Models\HasTranslations;

final class Course extends Model
{
    use HasTranslations, HasUlids;

    protected $fillable = [
        'teaser_image_path',
        'skill_level',
        'expected_completion_weeks',
        'is_featured',
        'instructor_id',
    ];

    protected $casts = [
        'skill_level'               => CourseSkillLevel::class,
        'expected_completion_weeks' => 'integer',
        'is_featured'               => 'boolean',
    ];

    /**
     * Get the instructor that teaches the course.
     *
     * @return BelongsTo<Instructor>
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    /**
     * Scope a query to only include featured courses.
     */
    public function scopeFeatured(): Builder
    {
        return $this->where('is_featured', true);
    }

    public function teaserImage(): string
    {
        return Storage::url($this->teaser_image_path);
    }
}
