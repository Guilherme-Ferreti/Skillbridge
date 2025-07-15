<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CourseSkillLevel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

final class Course extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'teaser',
        'slug',
        'skill_level',
    ];

    protected $casts = [
        'skill_level' => CourseSkillLevel::class,
    ];
}
