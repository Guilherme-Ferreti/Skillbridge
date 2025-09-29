<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

final class CourseController extends Controller
{
    public function index(): View
    {
        return view('pages.courses.index', [
            'courses' => Course::all(),
        ]);
    }
}
