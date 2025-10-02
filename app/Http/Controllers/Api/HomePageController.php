<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\ListBenefits;
use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageResource;
use App\Models\Course;
use App\Models\Testimonial;

final class HomePageController extends Controller
{
    public function __invoke(): HomePageResource
    {
        $benefits = app(ListBenefits::class)->handle();

        $courses = Course::query()
            ->with('instructor')
            ->featured()
            ->get();

        $testimonials = Testimonial::take(4)->get();

        return new HomePageResource([
            'benefits'     => $benefits,
            'courses'      => $courses,
            'testimonials' => $testimonials,
        ]);
    }
}
