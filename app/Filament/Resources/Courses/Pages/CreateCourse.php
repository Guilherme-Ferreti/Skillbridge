<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Enums\Locale;
use App\Filament\Resources\Courses\CourseResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

final class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;

    protected static bool $canCreateAnother = false;

    protected function handleRecordCreation(array $data): Model
    {
        $data = [
            'name' => [
                Locale::ENGLISH->value              => $data['name_' . Locale::ENGLISH->value],
                Locale::BRAZILIAN_PORTUGUESE->value => $data['name_' . Locale::BRAZILIAN_PORTUGUESE->value],
            ],
            'slug' => [
                Locale::ENGLISH->value              => $data['slug_' . Locale::ENGLISH->value],
                Locale::BRAZILIAN_PORTUGUESE->value => $data['slug_' . Locale::BRAZILIAN_PORTUGUESE->value],
            ],
            'teaser' => [
                Locale::ENGLISH->value              => $data['teaser_' . Locale::ENGLISH->value],
                Locale::BRAZILIAN_PORTUGUESE->value => $data['teaser_' . Locale::BRAZILIAN_PORTUGUESE->value],
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
