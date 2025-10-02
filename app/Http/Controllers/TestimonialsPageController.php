<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

final class TestimonialsPageController extends Controller
{
    public function __invoke(Request $request)
    {
        $testimonials = Testimonial::all();

        return view('pages.testimonials', compact('testimonials'));
    }
}
