<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;

final class OurCoursesComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('courses', $this->getCourses());
    }

    private function getCourses(): array
    {
        return [
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
    }
}
