<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\CourseSkillLevel;
use App\Enums\Locale;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

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
                ...$course,
                'is_featured'   => true,
                'instructor_id' => $instructors->shift()->id,
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
                'name' => [
                    Locale::ENGLISH->value              => 'Web Design Fundamentals',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de Web Design',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Aprenda os fundamentos do web design, incluindo HTML, CSS e princípios de design responsivo. Desenvolva as habilidades necessárias para criar sites visualmente atraentes e fáceis de usar.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'web-design-fundamentals',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'fundamentos-de-web-design',
                ],
                'expected_completion_weeks' => 4,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image_path'         => 'web-design-fundamentals.webp',
            ],
            [
                'name' => [
                    Locale::ENGLISH->value              => 'UI/UX Design',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Design de UI/UX',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Domine a arte de criar interfaces de usuário intuitivas (UI) e melhorar as experiências do usuário (UX). Aprenda princípios de design, wireframing, prototipagem e técnicas de testes de usabilidade.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'ui-ux-design',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'design-de-ui-ux',
                ],
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'ux-ui-design.webp',
            ],
            [
                'name' => [
                    Locale::ENGLISH->value              => 'Mobile App Development',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Desenvolvimento de Aplicativos Móveis',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Mergulhe no mundo do desenvolvimento de aplicativos móveis. Aprenda a construir aplicativos iOS e Android nativos usando frameworks líderes de mercado como Swift e Kotlin.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'mobile-app-development',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'desenvolvimento-de-aplicativos-moveis',
                ],
                'expected_completion_weeks' => 8,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'mobile-app-development.webp',
            ],
            [
                'name' => [
                    Locale::ENGLISH->value              => 'Graphic Design for Beginners',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Design Gráfico para Iniciantes',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Desvende os fundamentos do design gráfico, incluindo tipografia, teoria de cores, design de layout e técnicas de manipulação de imagens. Crie designs visualmente atraentes para impressão e mídia digital.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'graphic-design-for-beginners',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'design-grafico-para-iniciantes',
                ],
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image_path'         => 'graphic-design-for-beginners.webp',
            ],
            [
                'name' => [
                    Locale::ENGLISH->value              => 'Front-End Web Development',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Desenvolvimento Web Front-End',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Torne-se proficiente em desenvolvimento web front-end. Aprenda HTML, CSS, JavaScript e frameworks populares como Bootstrap e React. Crie sites interativos e responsivos.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'front-end-web-development',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'desenvolvimento-web-front-end',
                ],
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'front-end-web-development.webp',
            ],
            [
                'name' => [
                    Locale::ENGLISH->value              => 'Advanced JavaScript',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'JavaScript Avançado',
                ],
                'teaser' => [
                    Locale::ENGLISH->value              => 'Take your JavaScript skills to the next level. Explore advanced concepts like closures, prototypes, asynchronous programming, and ES6 features. Build complex applications with confidence.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Leve suas habilidades em JavaScript para o próximo nível. Explore conceitos avançados como fechamentos, protótipos, programação assíncrona e recursos do ES6. Crie aplicativos complexos com confiança.',
                ],
                'slug' => [
                    Locale::ENGLISH->value              => 'advanced-javascript',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'javascript-avancado',
                ],
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::ADVANCED->value,
                'teaser_image_path'         => 'advanced-javascript.webp',
            ],
        ];
    }
}
