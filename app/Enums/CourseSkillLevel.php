<?php

declare(strict_types=1);

namespace App\Enums;

enum CourseSkillLevel: string 
{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED = 'advanced';
}
