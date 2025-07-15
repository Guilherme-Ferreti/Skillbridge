<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Tables;

use App\Enums\CourseSkillLevel;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class CoursesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('skill_level')
                    ->searchable()
                    ->toggleable()
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn (CourseSkillLevel $state): string => $state->label()),
                TextColumn::make('instructor.name')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('is_featured')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Featured')
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Yes' : 'No'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->striped();
    }
}
