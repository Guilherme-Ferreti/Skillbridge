<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CourseSkillLevel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Course extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'teaser',
        'slug',
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
}
