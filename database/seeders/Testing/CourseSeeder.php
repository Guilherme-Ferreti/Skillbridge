<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\CourseSkillLevel;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

final class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = Instructor::all();

        foreach ($this->courses() as $course) {
            Course::create([
                'name'                      => $course['name'],
                'slug'                      => Str::slug($course['name']),
                'teaser'                    => $course['teaser'],
                'skill_level'               => $course['skill_level'],
                'expected_completion_weeks' => $course['expected_completion_weeks'],
                'is_featured'               => true,
                'instructor_id'             => $instructors->shift()->id,
            ]);
        }
    }

    /**
     * Get the courses to seed.
     */
    private function courses(): array
    {
        return [
            [
                'name'                      => 'Web Design Fundamentals',
                'teaser'                    => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                'expected_completion_weeks' => 4,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image'              => asset('/images/web-design-fundamentals.webp'),
            ],
            [
                'name'                      => 'UI/UX Design',
                'teaser'                    => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => asset('/images/ux-ui-design.webp'),
            ],
            [
                'name'                      => 'Mobile App Development',
                'teaser'                    => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                'expected_completion_weeks' => 8,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => asset('/images/mobile-app-development.webp'),
            ],
            [
                'name'                      => 'Graphic Design for Beginners',
                'teaser'                    => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image'              => asset('/images/graphic-design-for-beginners.webp'),
            ],
            [
                'name'                      => 'Front-End Web Development',
                'teaser'                    => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => asset('/images/front-end-web-development.webp'),
            ],
            [
                'name'                      => 'Advanced JavaScript',
                'teaser'                    => 'Take your JavaScript skills to the next level. Explore advanced concepts like closures, prototypes, asynchronous programming, and ES6 features. Build complex applications with confidence.',
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::ADVANCED->value,
                'teaser_image'              => asset('/images/advanced-javascript.webp'),
            ],
        ];
    }
}
