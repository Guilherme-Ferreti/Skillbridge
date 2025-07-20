<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\CourseSkillLevel;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Seeder;
use LaravelLang\LocaleList\Locale;

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
                    Locale::English->value          => 'Web Design Fundamentals',
                    Locale::PortugueseBrazil->value => 'Fundamentos de Web Design',
                ],
                'teaser' => [
                    Locale::English->value          => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                    Locale::PortugueseBrazil->value => 'Aprenda os fundamentos do web design, incluindo HTML, CSS e princípios de design responsivo. Desenvolva as habilidades necessárias para criar sites visualmente atraentes e fáceis de usar.',
                ],
                'slug' => [
                    Locale::English->value          => 'web-design-fundamentals',
                    Locale::PortugueseBrazil->value => 'fundamentos-de-web-design',
                ],
                'expected_completion_weeks' => 4,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image_path'         => 'web-design-fundamentals.webp',
            ],
            [
                'name' => [
                    Locale::English->value          => 'UI/UX Design',
                    Locale::PortugueseBrazil->value => 'Design de UI/UX',
                ],
                'teaser' => [
                    Locale::English->value          => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                    Locale::PortugueseBrazil->value => 'Domine a arte de criar interfaces de usuário intuitivas (UI) e melhorar as experiências do usuário (UX). Aprenda princípios de design, wireframing, prototipagem e técnicas de testes de usabilidade.',
                ],
                'slug' => [
                    Locale::English->value          => 'ui-ux-design',
                    Locale::PortugueseBrazil->value => 'design-de-ui-ux',
                ],
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'ux-ui-design.webp',
            ],
            [
                'name' => [
                    Locale::English->value          => 'Mobile App Development',
                    Locale::PortugueseBrazil->value => 'Desenvolvimento de Aplicativos Móveis',
                ],
                'teaser' => [
                    Locale::English->value          => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                    Locale::PortugueseBrazil->value => 'Mergulhe no mundo do desenvolvimento de aplicativos móveis. Aprenda a construir aplicativos iOS e Android nativos usando frameworks líderes de mercado como Swift e Kotlin.',
                ],
                'slug' => [
                    Locale::English->value          => 'mobile-app-development',
                    Locale::PortugueseBrazil->value => 'desenvolvimento-de-aplicativos-moveis',
                ],
                'expected_completion_weeks' => 8,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'mobile-app-development.webp',
            ],
            [
                'name' => [
                    Locale::English->value          => 'Graphic Design for Beginners',
                    Locale::PortugueseBrazil->value => 'Design Gráfico para Iniciantes',
                ],
                'teaser' => [
                    Locale::English->value          => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                    Locale::PortugueseBrazil->value => 'Desvende os fundamentos do design gráfico, incluindo tipografia, teoria de cores, design de layout e técnicas de manipulação de imagens. Crie designs visualmente atraentes para impressão e mídia digital.',
                ],
                'slug' => [
                    Locale::English->value          => 'graphic-design-for-beginners',
                    Locale::PortugueseBrazil->value => 'design-grafico-para-iniciantes',
                ],
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image_path'         => 'graphic-design-for-beginners.webp',
            ],
            [
                'name' => [
                    Locale::English->value          => 'Front-End Web Development',
                    Locale::PortugueseBrazil->value => 'Desenvolvimento Web Front-End',
                ],
                'teaser' => [
                    Locale::English->value          => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                    Locale::PortugueseBrazil->value => 'Torne-se proficiente em desenvolvimento web front-end. Aprenda HTML, CSS, JavaScript e frameworks populares como Bootstrap e React. Crie sites interativos e responsivos.',
                ],
                'slug' => [
                    Locale::English->value          => 'front-end-web-development',
                    Locale::PortugueseBrazil->value => 'desenvolvimento-web-front-end',
                ],
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image_path'         => 'front-end-web-development.webp',
            ],
            [
                'name' => [
                    Locale::English->value          => 'Advanced JavaScript',
                    Locale::PortugueseBrazil->value => 'JavaScript Avançado',
                ],
                'teaser' => [
                    Locale::English->value          => 'Take your JavaScript skills to the next level. Explore advanced concepts like closures, prototypes, asynchronous programming, and ES6 features. Build complex applications with confidence.',
                    Locale::PortugueseBrazil->value => 'Leve suas habilidades em JavaScript para o próximo nível. Explore conceitos avançados como fechamentos, protótipos, programação assíncrona e recursos do ES6. Crie aplicativos complexos com confiança.',
                ],
                'slug' => [
                    Locale::English->value          => 'advanced-javascript',
                    Locale::PortugueseBrazil->value => 'javascript-avancado',
                ],
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::ADVANCED->value,
                'teaser_image_path'         => 'advanced-javascript.webp',
            ],
        ];
    }
}
