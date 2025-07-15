<?php

declare(strict_types=1);

namespace App\Filament\Resources\Instructors\Pages;

use App\Filament\Resources\Instructors\InstructorResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateInstructor extends CreateRecord
{
    protected static string $resource = InstructorResource::class;
}
