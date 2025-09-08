<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Schemas;

use App\Enums\CourseSkillLevel;
use App\Enums\Locale;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
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
                Tabs::make('Translatable fields')
                    ->tabs([
                        Tab::make(Locale::ENGLISH->displayName())
                            ->schema([
                                self::nameInput(Locale::ENGLISH),
                                self::teaserInput(Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->displayName())
                            ->schema([
                                self::nameInput(Locale::BRAZILIAN_PORTUGUESE),
                                self::teaserInput(Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
                Section::make()
                    ->schema([
                        self::slugInput(),
                        self::teaserImageInput(),
                        self::skillLevelInput(),
                        self::instructorInput(),
                        self::expectedCompletionWeeksInput(),
                        self::isFeaturedInput(),
                    ]),
            ]);
    }

    private static function nameInput(Locale $locale): TextInput
    {
        $input = TextInput::make("name_{$locale->value}")
            ->label('Name')
            ->required($locale === Locale::ENGLISH);

        if ($locale === Locale::ENGLISH) {
            $input = $input
                ->afterStateUpdated(fn (Get $get, Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->live(debounce: 800);
        }

        return $input;
    }

    private static function slugInput(): TextInput
    {
        return TextInput::make('slug')
            ->label('Slug')
            ->required()
            ->unique();
    }

    private static function teaserInput(Locale $locale): Textarea
    {
        return Textarea::make("teaser_{$locale->value}")
            ->label('Teaser')
            ->required($locale === Locale::ENGLISH);
    }

    private static function teaserImageInput(): FileUpload
    {
        return FileUpload::make('teaser_image_path')
            ->label('Teaser image')
            ->disk('public')
            ->acceptedFileTypes(['image/webp'])
            ->maxSize(512)
            ->required();
    }

    private static function skillLevelInput(): Select
    {
        return Select::make('skill_level')
            ->options(CourseSkillLevel::selectFieldOptions())
            ->required();
    }

    private static function instructorInput(): Select
    {
        return Select::make('instructor_id')
            ->relationship('instructor', 'name')
            ->required();
    }

    private static function expectedCompletionWeeksInput(): TextInput
    {
        return TextInput::make('expected_completion_weeks')
            ->numeric()
            ->required()
            ->minValue(1);
    }

    private static function isFeaturedInput(): Toggle
    {
        return Toggle::make('is_featured')
            ->label('Featured');
    }
}
