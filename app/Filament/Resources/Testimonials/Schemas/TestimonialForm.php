<?php

declare(strict_types=1);

namespace App\Filament\Resources\Testimonials\Schemas;

use App\Enums\Locale;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

final class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->tabs([
                        Tab::make(Locale::ENGLISH->label())
                            ->schema([
                                self::quoteInput(Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                            ->schema([
                                self::quoteInput(Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
                Section::make()
                    ->schema([
                        self::authorNameInput(),
                        self::authorPictureInput(),
                    ]),
            ]);
    }

    private static function quoteInput(Locale $locale): Textarea
    {
        return Textarea::make("quote.$locale->value")
            ->label('Quote')
            ->rows(5)
            ->required()
            ->maxLength(255);
    }

    private static function authorNameInput(): TextInput
    {
        return TextInput::make('author_name')
            ->required()
            ->maxLength(255);
    }

    private static function authorPictureInput(): FileUpload
    {
        return SpatieMediaLibraryFileUpload::make('author_picture')
            ->disk('public')
            ->collection('author-picture')
            ->acceptedFileTypes(['image/webp'])
            ->maxSize(512);
    }
}
