<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\ListBenefits;
use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Course;
use Illuminate\Support\Facades\Vite;

final class HomeController extends Controller
{
    public function __invoke(): HomeResource
    {
        $benefits = app(ListBenefits::class)->handle();

        $courses = Course::query()
            ->with('instructor')
            ->featured()
            ->get();

        $testimonials = collect([
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
        ]);

        return new HomeResource([
            'benefits'     => $benefits,
            'courses'      => $courses,
            'testimonials' => $testimonials,
        ]);
    }
}
