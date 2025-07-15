<?php

declare(strict_types=1);

namespace App\Filament\Resources\Instructors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class InstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique(),
            ]);
    }
}
