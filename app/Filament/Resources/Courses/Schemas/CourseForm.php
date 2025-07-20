<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Schemas;

use App\Enums\CourseSkillLevel;
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
use LaravelLang\LocaleList\Locale;

final class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Translatable fields')
                    ->tabs([
                        Tab::make(Locale::English->name)
                            ->schema([
                                self::nameInput(Locale::English),
                                self::slugInput(Locale::English),
                                self::teaserInput(Locale::English),
                            ]),
                        Tab::make(Locale::PortugueseBrazil->name)
                            ->schema([
                                self::nameInput(Locale::PortugueseBrazil),
                                self::slugInput(Locale::PortugueseBrazil),
                                self::teaserInput(Locale::PortugueseBrazil),
                            ]),
                    ]),
                Section::make()
                    ->schema([
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
        return TextInput::make("name_{$locale->value}")
            ->label('Name')
            ->afterStateUpdated(fn (Get $get, Set $set, ?string $state) => $set("slug_{$locale->value}", Str::slug($state)))
            ->live(debounce: 800)
            ->required($locale === Locale::English);
    }

    private static function slugInput(Locale $locale): TextInput
    {
        return TextInput::make("slug_{$locale->value}")
            ->label('Slug')
            ->required($locale === Locale::English)
            ->unique();
    }

    private static function teaserInput(Locale $locale): Textarea
    {
        return Textarea::make("teaser_{$locale->value}")
            ->label('Teaser')
            ->required($locale === Locale::English);
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
