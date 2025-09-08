<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Enums\Locale;
use App\Filament\Resources\Courses\CourseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

final class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $course = self::getRecord();

        return [
            'name_' . Locale::ENGLISH->value                => $course->getTranslation('name', Locale::ENGLISH->value),
            'name_' . Locale::BRAZILIAN_PORTUGUESE->value   => $course->getTranslation('name', Locale::BRAZILIAN_PORTUGUESE->value),
            'teaser_' . Locale::ENGLISH->value              => $course->getTranslation('teaser', Locale::ENGLISH->value),
            'teaser_' . Locale::BRAZILIAN_PORTUGUESE->value => $course->getTranslation('teaser', Locale::BRAZILIAN_PORTUGUESE->value),
            'slug'                                          => $data['slug'],
            'teaser_image_path'                             => $data['teaser_image_path'],
            'skill_level'                                   => $data['skill_level'],
            'instructor_id'                                 => $data['instructor_id'],
            'expected_completion_weeks'                     => $data['expected_completion_weeks'],
            'is_featured'                                   => $data['is_featured'],
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->setTranslation('name', $data['name_' . Locale::ENGLISH->value], Locale::ENGLISH->value);
        $record->setTranslation('name', $data['name_' . Locale::BRAZILIAN_PORTUGUESE->value], Locale::BRAZILIAN_PORTUGUESE->value);

        $record->setTranslation('teaser', $data['teaser_' . Locale::ENGLISH->value], Locale::ENGLISH->value);
        $record->setTranslation('teaser', $data['teaser_' . Locale::BRAZILIAN_PORTUGUESE->value], Locale::BRAZILIAN_PORTUGUESE->value);

        $record->slug                      = $data['slug'];
        $record->teaser_image_path         = $data['teaser_image_path'];
        $record->skill_level               = $data['skill_level'];
        $record->instructor_id             = $data['instructor_id'];
        $record->expected_completion_weeks = $data['expected_completion_weeks'];
        $record->is_featured               = $data['is_featured'];

        $record->save();

        return $record;
    }
}
