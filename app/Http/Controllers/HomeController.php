<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ListBenefits;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Illuminate\View\View;

final class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $benefits = app(ListBenefits::class)->handle()->slice(0, 6);

        $courses = Course::query()
            ->featured()
            ->get();

        $testimonials = [
            [
                'quote'        => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                'author_name'  => 'Sarah L',
                'author_image' => Vite::image('profile-picture-1.webp'),
            ],
            [
                'quote'        => 'The UI/UX design course exceeded my expectations. The instructor\'s expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',
                'author_name'  => 'Jason M',
                'author_image' => Vite::image('profile-picture-2.webp'),
            ],
            [
                'quote'        => 'The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I\'m now building my own app. Great course!',
                'author_name'  => 'Emily R',
                'author_image' => Vite::image('profile-picture-3.webp'),
            ],
            [
                'quote'        => 'I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my design abilities significantly. I\'m grateful for this course!',
                'author_name'  => 'Michael K',
                'author_image' => Vite::image('profile-picture-4.webp'),
            ],
        ];

        return view('pages.home', compact('benefits', 'courses', 'testimonials'));
    }
}
