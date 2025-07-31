<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $benefits = [
            [
                'number'      => '01',
                'title'       => 'Flexible Learning Schedule',
                'description' => 'Fit your coursework around your existing commitments and obligations.',
            ],
            [
                'number'      => '02',
                'title'       => 'Expert Instruction',
                'description' => 'Learn from industry experts who have hands-on experience in design and development.',
            ],
            [
                'number'      => '03',
                'title'       => 'Diverse Course Offerings',
                'description' => 'Explore a wide range of design and development courses covering various topics.',
            ],
            [
                'number'      => '04',
                'title'       => 'Updated Curriculum',
                'description' => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',
            ],
            [
                'number'      => '05',
                'title'       => 'Practical Projects and Assignments',
                'description' => 'Develop a portfolio showcasing your skills and abilities to potential employers.',
            ],
            [
                'number'      => '06',
                'title'       => 'Interactive Learning Environment',
                'description' => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',
            ],
        ];

        $courses = Course::query()
            ->with('instructor')
            ->featured()
            ->get();

        $testimonials = [
            [
                'quote'        => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                'author_name'  => 'Sarah L',
                'author_image' => asset('/images/profile-picture-1.webp'),
            ],
            [
                'quote'        => 'The UI/UX design course exceeded my expectations. The instructor\'s expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',
                'author_name'  => 'Jason M',
                'author_image' => asset('/images/profile-picture-2.webp'),
            ],
            [
                'quote'        => 'The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I\'m now building my own app. Great course!',
                'author_name'  => 'Emily R',
                'author_image' => asset('/images/profile-picture-3.webp'),
            ],
            [
                'quote'        => 'I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my design abilities significantly. I\'m grateful for this course!',
                'author_name'  => 'Michael K',
                'author_image' => asset('/images/profile-picture-4.webp'),
            ],
        ];

        return view('pages.home', compact('benefits', 'courses', 'testimonials'));
    }
}
