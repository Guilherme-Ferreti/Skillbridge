<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Enums\Locale;
use App\Models\Settings;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

final class ManageFaq extends Page
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected string $view = 'filament.pages.manage-faq';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;

    protected static ?string $title = 'FAQ';

    protected static ?string $slug = 'manage-faq';

    public function mount(): void
    {
        $this->form->fill([
            'faq' => $this->getRecord()->value,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Repeater::make('faq')
                        ->hiddenLabel()
                        ->schema([
                            Tabs::make('Translatable fields')
                                ->tabs([
                                    Tab::make(Locale::ENGLISH->label())
                                        ->schema([
                                            $this->questionInput(Locale::ENGLISH),
                                            $this->answerInput(Locale::ENGLISH),
                                        ]),
                                    Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                                        ->schema([
                                            $this->questionInput(Locale::BRAZILIAN_PORTUGUESE),
                                            $this->answerInput(Locale::BRAZILIAN_PORTUGUESE),
                                        ]),
                                ]),
                        ]),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('Save')
                                ->label('Save changes')
                                ->submit('save'),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->getRecord()->update([
            'value' => $data['faq'],
        ]);

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }

    public function getRecord(): Settings
    {
        return settings('faq');
    }

    private function questionInput(Locale $locale): TextInput
    {
        return TextInput::make('question_' . $locale->value)
            ->label('Question')
            ->maxLength(100)
            ->required();
    }

    private function answerInput(Locale $locale): Textarea
    {
        return Textarea::make('answer_' . $locale->value)
            ->label('Answer')
            ->rows(5)
            ->maxLength(800)
            ->required();
    }
}
