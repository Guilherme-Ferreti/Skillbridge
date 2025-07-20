<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Filament\Resources\Courses\CourseResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use LaravelLang\LocaleList\Locale;

final class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;

    protected static bool $canCreateAnother = false;

    protected function handleRecordCreation(array $data): Model
    {
        $data = [
            'name' => [
                Locale::English->value          => $data['name_' . Locale::English->value],
                Locale::PortugueseBrazil->value => $data['name_' . Locale::PortugueseBrazil->value],
            ],
            'slug' => [
                Locale::English->value          => $data['slug_' . Locale::English->value],
                Locale::PortugueseBrazil->value => $data['slug_' . Locale::PortugueseBrazil->value],
            ],
            'teaser' => [
                Locale::English->value          => $data['teaser_' . Locale::English->value],
                Locale::PortugueseBrazil->value => $data['teaser_' . Locale::PortugueseBrazil->value],
            ],
            'teaser_image_path'         => $data['teaser_image_path'],
            'skill_level'               => $data['skill_level'],
            'instructor_id'             => $data['instructor_id'],
            'expected_completion_weeks' => $data['expected_completion_weeks'],
            'is_featured'               => $data['is_featured'],
        ];

        return self::getModel()::create($data);
    }
}
