<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Schemas;

use App\Enums\CourseSkillLevel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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
                    ->afterStateUpdated(fn (Get $get, Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->live(debounce: 500)
                    ->required(),
                TextInput::make('slug')
                    ->required()
                    ->unique(),
                Textarea::make('teaser')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('teaser_image_path')
                    ->label('Teaser image')
                    ->disk('public')
                    ->acceptedFileTypes(['image/webp'])
                    ->maxSize(512)
                    ->required()
                    ->columnSpanFull(),
                Select::make('skill_level')
                    ->options(CourseSkillLevel::selectFieldOptions())
                    ->required(),
                Select::make('instructor_id')
                    ->relationship('instructor', 'name')
                    ->required(),
                TextInput::make('expected_completion_weeks')
                    ->numeric()
                    ->required()
                    ->minValue(1),
                Toggle::make('is_featured')
                    ->label('Featured')
                    ->columnSpanFull(),
            ]);
    }
}
