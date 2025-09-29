<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CourseSkillLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\Storage;
use LaravelLang\Models\HasTranslations;

final class Course extends Model
{
    use HasTranslations, HasUlids;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'slug',
        'teaser_image_path',
        'skill_level',
        'expected_completion_weeks',
        'is_featured',
        'instructor_id',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'skill_level'               => CourseSkillLevel::class,
        'expected_completion_weeks' => 'integer',
        'is_featured'               => 'boolean',
    ];

    /**
     * @return BelongsTo<Instructor, $this>
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    /**
     * @return HasMany<Module, $this>
     */
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    /**
     * @return HasManyThrough<Lesson, Module, $this>
     */
    public function lessons(): HasManyThrough
    {
        return $this->through('modules')->has(Lesson::class);
    }

    public function scopeFeatured(): Builder
    {
        return $this->where('is_featured', true);
    }

    public function teaserImage(): string
    {
        return asset(Storage::url($this->teaser_image_path));
    }
}
