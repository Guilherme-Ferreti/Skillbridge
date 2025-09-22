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
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Support\RawJs;

final class ManagePlans extends Page
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected string $view = 'filament.pages.manage-plans';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentCurrencyDollar;

    protected static ?string $title = 'Plans';

    public function mount(): void
    {
        $this->form->fill($this->getRecord()->value);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    $this->planSection('free', 'Free Plan'),
                    $this->planSection('pro', 'Pro Plan'),
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
            'value' => $data,
        ]);

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }

    public function getRecord(): Settings
    {
        return settings('plans');
    }

    private function planSection(string $plan, string $sectionName): Section
    {
        return Section::make($sectionName)
            ->collapsible()
            ->collapsed()
            ->persistCollapsed()
            ->columns(2)
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make(Locale::ENGLISH->label())
                            ->schema([
                                $this->planNameInput($plan, Locale::ENGLISH),
                                $this->featuresInput($plan, Locale::ENGLISH),
                                $this->missingFeaturesInput($plan, Locale::ENGLISH),
                            ]),
                        Tab::make(Locale::BRAZILIAN_PORTUGUESE->label())
                            ->schema([
                                $this->planNameInput($plan, Locale::BRAZILIAN_PORTUGUESE),
                                $this->featuresInput($plan, Locale::BRAZILIAN_PORTUGUESE),
                                $this->missingFeaturesInput($plan, Locale::BRAZILIAN_PORTUGUESE),
                            ]),
                    ]),
                Fieldset::make('Pricing')
                    ->schema([
                        $this->pricePerMonthInput($plan),
                        $this->pricePerYearInput($plan),
                    ]),
            ]);
    }

    private function pricePerMonthInput(string $plan): TextInput
    {
        return TextInput::make("$plan.price_per_month")
            ->label('Per month')
            ->numeric()
            ->inputMode('decimal')
            ->mask(RawJs::make('$money($input)'))
            ->stripCharacters(',')
            ->prefixIcon(Heroicon::CurrencyDollar)
            ->required()
            ->maxValue(9999.99);
    }

    private function pricePerYearInput(string $plan): TextInput
    {
        return TextInput::make("$plan.price_per_year")
            ->label('Per year')
            ->numeric()
            ->inputMode('decimal')
            ->mask(RawJs::make('$money($input)'))
            ->stripCharacters(',')
            ->prefixIcon(Heroicon::CurrencyDollar)
            ->required()
            ->maxValue(9999.99);
    }

    private function planNameInput(string $plan, Locale $locale): TextInput
    {
        return TextInput::make("$plan.name.$locale->value")
            ->label('Name')
            ->maxLength(255)
            ->required();
    }

    private function featuresInput(string $plan, Locale $locale): Repeater
    {
        return Repeater::make("$plan.features.$locale->value")
            ->label('Features')
            ->simple($this->featureNameInput());
    }

    private function missingFeaturesInput(string $plan, Locale $locale): Repeater
    {
        return Repeater::make("$plan.missing_features.$locale->value")
            ->label('Missing Features')
            ->simple($this->featureNameInput());
    }

    private function featureNameInput(): TextInput
    {
        return TextInput::make('name')
            ->label('Name')
            ->maxLength(255)
            ->required();
    }
}
