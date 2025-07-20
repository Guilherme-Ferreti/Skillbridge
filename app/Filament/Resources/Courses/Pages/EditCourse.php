<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Filament\Resources\Courses\CourseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use LaravelLang\LocaleList\Locale;

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
            'name_' . Locale::English->value            => $course->getTranslation('name', Locale::English->value),
            'name_' . Locale::PortugueseBrazil->value   => $course->getTranslation('name', Locale::PortugueseBrazil->value),
            'slug_' . Locale::English->value            => $course->getTranslation('slug', Locale::English->value),
            'slug_' . Locale::PortugueseBrazil->value   => $course->getTranslation('slug', Locale::PortugueseBrazil->value),
            'teaser_' . Locale::English->value          => $course->getTranslation('teaser', Locale::English->value),
            'teaser_' . Locale::PortugueseBrazil->value => $course->getTranslation('teaser', Locale::PortugueseBrazil->value),
            'teaser_image_path'                         => $data['teaser_image_path'],
            'skill_level'                               => $data['skill_level'],
            'instructor_id'                             => $data['instructor_id'],
            'expected_completion_weeks'                 => $data['expected_completion_weeks'],
            'is_featured'                               => $data['is_featured'],
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->setTranslation('name', $data['name_' . Locale::English->value], Locale::English->value);
        $record->setTranslation('name', $data['name_' . Locale::PortugueseBrazil->value], Locale::PortugueseBrazil->value);

        $record->setTranslation('slug', $data['slug_' . Locale::English->value], Locale::English->value);
        $record->setTranslation('slug', $data['slug_' . Locale::PortugueseBrazil->value], Locale::PortugueseBrazil->value);

        $record->setTranslation('teaser', $data['teaser_' . Locale::English->value], Locale::English->value);
        $record->setTranslation('teaser', $data['teaser_' . Locale::PortugueseBrazil->value], Locale::PortugueseBrazil->value);

        $record->teaser_image_path         = $data['teaser_image_path'];
        $record->skill_level               = $data['skill_level'];
        $record->instructor_id             = $data['instructor_id'];
        $record->expected_completion_weeks = $data['expected_completion_weeks'];
        $record->is_featured               = $data['is_featured'];

        $record->save();

        return $record;
    }
}
