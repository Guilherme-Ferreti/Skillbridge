<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ListBenefits;
use App\Models\Course;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class HomePageController extends Controller
{
    public function __invoke(Request $request): View
    {
        $benefits = app(ListBenefits::class)->handle()->slice(0, 6);

        $courses = Course::query()
            ->featured()
            ->get();

        $testimonials = Testimonial::take(4)->get();

        return view('pages.home', compact('benefits', 'courses', 'testimonials'));
    }
}
