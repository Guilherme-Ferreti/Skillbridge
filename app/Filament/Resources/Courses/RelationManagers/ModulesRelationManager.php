<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\RelationManagers;

use App\Enums\Locale;
use App\Models\Lesson;
use App\Models\Module;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

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
                self::lessonsInput(),
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
                    ->mutateRecordDataUsing(fn (array $data, Module $module) => [
                        ...$data,
                        'name' => [
                            Locale::ENGLISH->value              => $module->getTranslation('name', Locale::ENGLISH->value),
                            Locale::BRAZILIAN_PORTUGUESE->value => $module->getTranslation('name', Locale::BRAZILIAN_PORTUGUESE->value),
                        ],
                    ]),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }

    private static function lessonNameInput(Locale $locale): TextInput
    {
        return TextInput::make("name.$locale->value")
            ->label('Name')
            ->required()
            ->maxLength(255);
    }

    private function nameInput(Locale $locale): TextInput
    {
        return TextInput::make("name.$locale->value")
            ->label('Name')
            ->required()
            ->maxLength(255);
    }

    private function lessonsInput(): Repeater
    {
        return Repeater::make('lessons')
            ->relationship('lessons')
            ->itemLabel(fn (array $state) => $state['name'][Locale::ENGLISH->value] . ' - ' . $state['duration'])
            ->collapsible()
            ->collapsed()
            ->mutateRelationshipDataBeforeFillUsing(function (array $data) {
                /** @var Lesson $lesson */
                $lesson = Lesson::find($data['id']);

                return [
                    ...$data,
                    'name' => [
                        Locale::ENGLISH->value              => $lesson->getTranslation('name', Locale::ENGLISH->value),
                        Locale::BRAZILIAN_PORTUGUESE->value => $lesson->getTranslation('name', Locale::BRAZILIAN_PORTUGUESE->value),
                    ],
                ];
            })
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make(Locale::ENGLISH->label())
                            ->schema([
                                self::lessonNameInput(Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                            ->schema([
                                self::lessonNameInput(Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
                TextInput::make('duration')
                    ->type('time')
                    ->required(),
            ]);
    }
}
