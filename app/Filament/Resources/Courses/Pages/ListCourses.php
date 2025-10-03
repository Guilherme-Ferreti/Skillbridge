<?php

declare(strict_types=1);

namespace App\Filament\Resources\Courses\Pages;

use App\Filament\Resources\Courses\CourseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;

final class ListCourses extends ListRecords
{
    protected static string $resource = CourseResource::class;

    public function getTabs(): array
    {
        return [
            'all'      => Tab::make(),
            'featured' => Tab::make()->modifyQueryUsing(fn ($query) => $query->featured()),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
