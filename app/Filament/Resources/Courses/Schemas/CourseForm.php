<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Schemas;

use App\Enums\CourseSkillLevel;
use App\Enums\Locale;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
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
            ->columns(1)
            ->components([
                Tabs::make()
                    ->tabs([
                        Tab::make(Locale::ENGLISH->label())
                            ->schema([
                                self::nameInput(Locale::ENGLISH),
                                self::teaserInput(Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                            ->schema([
                                self::nameInput(Locale::BRAZILIAN_PORTUGUESE),
                                self::teaserInput(Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
                Section::make()
                    ->columns(2)
                    ->schema([
                        self::slugInput(),
                        self::skillLevelInput(),
                        self::instructorInput(),
                        self::expectedCompletionWeeksInput(),
                        self::isFeaturedInput(),
                    ]),

                Section::make('Images')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        self::teaserImageInput(),
                        self::adiditionalImagesInput(),
                    ]),
            ]);
    }

    private static function nameInput(Locale $locale): TextInput
    {
        $input = TextInput::make("name.$locale->value")
            ->label('Name')
            ->required()
            ->maxLength(255);

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
            ->maxLength(255)
            ->unique();
    }

    private static function teaserInput(Locale $locale): Textarea
    {
        return Textarea::make("teaser.$locale->value")
            ->label('Teaser')
            ->rows(5)
            ->required()
            ->maxLength(255);
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

    private static function teaserImageInput(): FileUpload
    {
        return SpatieMediaLibraryFileUpload::make('teaser_image')
            ->label('Teaser image')
            ->disk('public')
            ->collection('teaser-image')
            ->required()
            ->acceptedFileTypes(['image/webp'])
            ->maxSize(512);
    }

    private static function adiditionalImagesInput(): FileUpload
    {
        return SpatieMediaLibraryFileUpload::make('additional_images')
            ->label('Additional images')
            ->disk('public')
            ->collection('additional-images')
            ->multiple()
            ->maxFiles(2)
            ->acceptedFileTypes(['image/webp'])
            ->maxSize(512);
    }
}
