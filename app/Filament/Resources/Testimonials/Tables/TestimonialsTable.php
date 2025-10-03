<?php

declare(strict_types=1);

namespace App\Filament\Resources\Testimonials\Tables;

use App\Models\Testimonial;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author_name')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('author_picture')
                    ->defaultImageUrl(fn (Testimonial $testimonial): string => $testimonial->authorPicture())
                    ->circular(),
                TextColumn::make('created_at')
                    ->dateTime('M, d Y - H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
