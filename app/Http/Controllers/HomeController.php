<?php

declare(strict_types=1);

namespace App\Http\Controllers;

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

        $courses = [
            [
                'name'         => 'Web Design Fundamentals',
                'teaser_text'  => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                'duration'     => '4 weeks',
                'difficulty'   => 'Beginner',
                'instructor'   => 'John Smith',
                'teaser_image' => asset('/images/web-design-fundamentals.webp'),
            ],
            [
                'name'         => 'UI/UX Design',
                'teaser_text'  => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                'duration'     => '6 weeks',
                'difficulty'   => 'Intermediate',
                'instructor'   => 'Emily Johnson',
                'teaser_image' => asset('/images/ux-ui-design.webp'),
            ],
            [
                'name'         => 'Mobile App Development',
                'teaser_text'  => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                'duration'     => '8 weeks',
                'difficulty'   => 'Intermediate',
                'instructor'   => 'David Brown',
                'teaser_image' => asset('/images/mobile-app-development.webp'),
            ],
            [
                'name'         => 'Graphic Design for Beginners',
                'teaser_text'  => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                'duration'     => '10 weeks',
                'difficulty'   => 'Beginner',
                'instructor'   => 'Sarah Thompson',
                'teaser_image' => asset('/images/graphic-design-for-beginners.webp'),
            ],
            [
                'name'         => 'Front-End Web Development',
                'teaser_text'  => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                'duration'     => '10 weeks',
                'difficulty'   => 'Intermediate',
                'instructor'   => 'Michael Adams',
                'teaser_image' => asset('/images/front-end-web-development.webp'),
            ],
            [
                'name'         => 'Advanced JavaScript',
                'teaser_text'  => 'Take your JavaScript skills to the next level. Explore advanced concepts like closures, prototypes, asynchronous programming, and ES6 features. Build complex applications with confidence.',
                'duration'     => '6 weeks',
                'difficulty'   => 'Advance',
                'instructor'   => 'Jennifer Wilson',
                'teaser_image' => asset('/images/advanced-javascript.webp'),
            ],
        ];

        $testimonials = [
            [
                'testimonial'    => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                'author_name'    => 'Sarah L',
                'author_picture' => asset('/images/profile-picture-1.webp'),
            ],
            [
                'testimonial'    => 'The UI/UX design course exceeded my expectations. The instructor\'s expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',
                'author_name'    => 'Jason M',
                'author_picture' => asset('/images/profile-picture-2.webp'),
            ],
            [
                'testimonial'    => 'The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I\'m now building my own app. Great course!',
                'author_name'    => 'Emily R',
                'author_picture' => asset('/images/profile-picture-3.webp'),
            ],
            [
                'testimonial'    => 'I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my design abilities significantly. I\'m grateful for this course!',
                'author_name'    => 'Michael K',
                'author_picture' => asset('/images/profile-picture-4.webp'),
            ],
        ];

        return view('pages.home', compact('benefits', 'courses', 'testimonials'));
    }
}
