<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Course;

final class CourseController extends Controller
{
    public function index()
    {
        return view('pages.courses.index', [
            'courses' => Course::all(),
        ]);
    }
}
