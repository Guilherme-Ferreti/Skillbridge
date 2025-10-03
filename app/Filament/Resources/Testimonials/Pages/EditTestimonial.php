<?php

declare(strict_types=1);

namespace App\Filament\Resources\Testimonials\Pages;

use App\Enums\Locale;
use App\Filament\Resources\Testimonials\TestimonialResource;
use App\Models\Testimonial;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditTestimonial extends EditRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        /** @var Testimonial $testimonial */
        $testimonial = self::getRecord();

        return [
            ...$data,
            'quote' => [
                Locale::ENGLISH->value              => $testimonial->getTranslation('quote', Locale::ENGLISH->value),
                Locale::BRAZILIAN_PORTUGUESE->value => $testimonial->getTranslation('quote', Locale::BRAZILIAN_PORTUGUESE->value),
            ],
        ];
    }
}
