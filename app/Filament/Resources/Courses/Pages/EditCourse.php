<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Enums\Locale;
use App\Filament\Resources\Courses\CourseResource;
use App\Models\Course;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        /** @var Course $course */
        $course = self::getRecord();

        return [
            ...$data,
            'name' => [
                Locale::ENGLISH->value              => $course->getTranslation('name', Locale::ENGLISH->value),
                Locale::BRAZILIAN_PORTUGUESE->value => $course->getTranslation('name', Locale::BRAZILIAN_PORTUGUESE->value),
            ],
            'teaser' => [
                Locale::ENGLISH->value              => $course->getTranslation('teaser', Locale::ENGLISH->value),
                Locale::BRAZILIAN_PORTUGUESE->value => $course->getTranslation('teaser', Locale::BRAZILIAN_PORTUGUESE->value),
            ],
            'description' => [
                Locale::ENGLISH->value              => $course->getTranslation('description', Locale::ENGLISH->value),
                Locale::BRAZILIAN_PORTUGUESE->value => $course->getTranslation('description', Locale::BRAZILIAN_PORTUGUESE->value),
            ],
        ];
    }
}
