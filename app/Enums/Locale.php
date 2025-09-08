<?php

declare(strict_types=1);

namespace App\Enums;

enum Locale: string
{
    case ENGLISH              = 'en';
    case BRAZILIAN_PORTUGUESE = 'pt_BR';

    /**
     * Get the user-friendly label for the locale.
     */
    public function label(): string
    {
        return match ($this) {
            self::ENGLISH              => 'English',
            self::BRAZILIAN_PORTUGUESE => 'Portuguese',
        };
    }
}
