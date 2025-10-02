<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

final class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::query()
            ->with([
                'modules' => fn ($query) => $query->orderBy('order'),
            ])
            ->get();

        return view('pages.courses.index', [
            'courses' => $courses,
        ]);
    }

    public function show(Course $course): View
    {
        return view('pages.courses.show', [
            'course' => $course,
        ]);
    }
}
