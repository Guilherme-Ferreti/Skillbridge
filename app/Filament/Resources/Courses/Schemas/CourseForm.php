<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Schemas;

use App\Enums\CourseSkillLevel;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

final class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->afterStateUpdated(fn (Get $get, Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->reactive(),
                TextInput::make('slug')
                    ->required()
                    ->unique(),
                Textarea::make('teaser')
                    ->columnSpanFull()
                    ->required(),
                Select::make('skill_level')
                    ->options(CourseSkillLevel::selectFieldOptions())
                    ->required(),
            ]);
    }
}
