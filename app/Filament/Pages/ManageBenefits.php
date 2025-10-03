<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Enums\Locale;
use App\Models\Settings;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

/**
 * @property-read Schema $form
 */
final class ManageBenefits extends Page
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected string $view = 'filament.pages.manage-benefits';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $title = 'Benefits';

    public function mount(): void
    {
        $this->form->fill([
            'benefits' => $this->getRecord()->value,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Repeater::make('benefits')
                        ->hiddenLabel()
                        ->schema([
                            Tabs::make('Translatable fields')
                                ->tabs([
                                    Tab::make(Locale::ENGLISH->label())
                                        ->columns(2)
                                        ->schema([
                                            $this->titleInput(Locale::ENGLISH),
                                            $this->descriptionInput(Locale::ENGLISH),
                                        ]),
                                    Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                                        ->columns(2)
                                        ->schema([
                                            $this->titleInput(Locale::BRAZILIAN_PORTUGUESE),
                                            $this->descriptionInput(Locale::BRAZILIAN_PORTUGUESE),
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
            'value' => $data['benefits'],
        ]);

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }

    public function getRecord(): Settings
    {
        return settings('benefits');
    }

    private function titleInput(Locale $locale): TextInput
    {
        return TextInput::make("title.$locale->value")
            ->label('Title')
            ->maxLength(255)
            ->required();
    }

    private function descriptionInput(Locale $locale): TextInput
    {
        return TextInput::make("description.$locale->value")
            ->label('Description')
            ->maxLength(255)
            ->required();
    }
}
