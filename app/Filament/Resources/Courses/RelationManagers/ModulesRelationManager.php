<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\RelationManagers;

use App\Enums\Locale;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

final class ModulesRelationManager extends RelationManager
{
    protected static string $relationship = 'modules';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Tabs::make()
                    ->tabs([
                        Tab::make(Locale::ENGLISH->label())
                            ->schema([
                                self::nameInput(Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                            ->schema([
                                self::nameInput(Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->paginated(false)
            ->reorderable('order')
            ->modifyQueryUsing(fn ($query) => $query->orderBy('order'))
            ->columns([
                TextColumn::make('order'),
                TextColumn::make('name'),
                TextColumn::make('lessons_count')
                    ->counts('lessons'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make()
                    ->mutateRecordDataUsing(fn (array $data, Model $record) => [
                        ...$data,
                        'name' => [
                            Locale::ENGLISH->value              => $record->getTranslation('name', Locale::ENGLISH->value),
                            Locale::BRAZILIAN_PORTUGUESE->value => $record->getTranslation('name', Locale::BRAZILIAN_PORTUGUESE->value),
                        ],
                    ]),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }

    private function nameInput(Locale $locale): TextInput
    {
        return TextInput::make("name.$locale->value")
            ->label('Name')
            ->required()
            ->maxLength(255);
    }
}
