<?php

declare(strict_types=1);

namespace App\Enums;

enum CourseSkillLevel: string
{
    case BEGINNER     = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED     = 'advanced';

    public static function selectFieldOptions(): array
    {
        return [
            self::BEGINNER->value     => self::BEGINNER->label(),
            self::INTERMEDIATE->value => self::INTERMEDIATE->label(),
            self::ADVANCED->value     => self::ADVANCED->label(),
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::BEGINNER     => __('Beginner'),
            self::INTERMEDIATE => __('Intermediate'),
            self::ADVANCED     => __('Advanced'),
        };
    }
}
