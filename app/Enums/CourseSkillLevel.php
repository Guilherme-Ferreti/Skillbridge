<?php

declare(strict_types=1);

namespace App\Enums;

enum CourseSkillLevel: string
{
    case BEGINNER     = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED     = 'advanced';

    /**
     * Returns an associative array of skill levels that can be used in a select form field.
     */
    public static function selectFieldOptions(): array
    {
        return [
            self::BEGINNER->value     => self::BEGINNER->label(),
            self::INTERMEDIATE->value => self::INTERMEDIATE->label(),
            self::ADVANCED->value     => self::ADVANCED->label(),
        ];
    }

    /**
     * Get the user-friendly label for the skill level.
     */
    public function label(): string
    {
        return match ($this) {
            self::BEGINNER     => 'Beginner',
            self::INTERMEDIATE => 'Intermediate',
            self::ADVANCED     => 'Advanced',
        };
    }
}
