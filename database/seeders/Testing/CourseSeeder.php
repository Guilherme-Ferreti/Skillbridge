<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\CourseSkillLevel;
use App\Enums\Locale;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

final class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = Instructor::all();

        foreach ($this->courses() as $courseData) {
            $modulesData = Arr::pull($courseData, 'modules');

            $teaserImage      = Arr::pull($courseData, 'teaser_image');
            $additionalImages = Arr::pull($courseData, 'additional_images');

            $course = Course::create([
                ...$courseData,
                'is_featured'   => true,
                'instructor_id' => $instructors->shift()->id,
            ]);

            $course
                ->addMedia(resource_path("images/courses/{$teaserImage}"))
                ->preservingOriginal()
                ->toMediaCollection('teaser-image');

            foreach ($additionalImages as $additionalImage) {
                $course
                    ->addMedia(resource_path("images/courses/{$additionalImage}"))
                    ->preservingOriginal()
                    ->toMediaCollection('additional-images');
            }

            foreach ($modulesData as $key => $moduleData) {
                $moduleData['order'] = $key + 1;

                $lessonsData = Arr::pull($moduleData, 'lessons');

                $course
                    ->modules()
                    ->create($moduleData)
                    ->lessons()
                    ->createMany($lessonsData);
            }
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
                'slug'                      => 'web-design-fundamentals',
                'expected_completion_weeks' => 4,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image'              => 'web-design-fundamentals.webp',
                'additional_images'         => [
                    'web-design-fundamentals-2.webp',
                    'web-design-fundamentals-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Introduction to Web Design',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Introdução ao Web Design',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'What is Web Design?',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'O que é Web Design?',
                                ],
                                'duration' => '00:30',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Web History and Evolution',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'História e Evolução da Web',
                                ],
                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Web Design Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Web Design',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'HTML and CSS Fundamentals',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de HTML e CSS',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'HTML Fundamentals',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de HTML',
                                ],
                                'duration' => '01:30',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'CSS Fundamentals',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de CSS',
                                ],
                                'duration' => '01:15',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Responsive Design',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Design Responsivo',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Responsive Design Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Design Responsivo',
                                ],
                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Mobile First Approach',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Abordagem Mobile First',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Media Queries and Responsive Images',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Media Queries e Imagens Responsivas',
                                ],
                                'duration' => '01:15',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Creating Responsive Layouts',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Criando Layouts Responsivos',
                                ],
                                'duration' => '01:30',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Advanced HTML and CSS',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'HTML e CSS Avançados',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Advanced HTML and CSS Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Tecnicas Avançadas de HTML e CSS',
                                ],
                                'duration' => '02:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Performance Optimization Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Tecnicas de Otimização de Performance',
                                ],
                                'duration' => '01:45',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Web Accessibility',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Acessibilidade na Web',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Web Accessibility Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Acessibilidade na Web',
                                ],
                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Screen Reader Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Tecnicas de Leitor de Tela',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Color Contrast and Accessibility',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Contraste de Cor e Acessibilidade',
                                ],
                                'duration' => '01:15',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Keyboard Navigation and Accessibility',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Navegação por Teclado e Acessibilidade',
                                ],
                                'duration' => '01:30',
                            ],
                        ],
                    ],
                ],
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
                'slug'                      => 'ui-ux-design',
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => 'ux-ui-design.webp',
                'additional_images'         => [
                    'ux-ui-design-2.webp',
                    'ux-ui-design-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Introduction to UI/UX Design',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Introdução ao Design UI/UX',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Understanding UI/UX Design Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Compreendendo os princípios de design de UI/UX',
                                ],

                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Importance of User-Centered Design',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Importância do Design Centrado no Usuário',
                                ],

                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'The Role of UI/UX Design in Product Development',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'O papel do design de UI/UX no desenvolvimento de produtos',
                                ],

                                'duration' => '00:45',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'User Research and Analysis',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Pesquisa e Análise de Usuários',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Conducting User Research and Interviews',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Realizando Pesquisa e Entrevistas de Usuários',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Analyzing User Needs and Behavior',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Analisando Necessidades e Comportamento de Usuários',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Creating User Personas and Scenarios',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Criando Personas e Cenários de Usuários',
                                ],
                                'duration' => '00:45',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Wireframing and Prototyping',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Wireframing e Prototipagem',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Introduction to Wireframing Tools and Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Introdução às ferramentas e técnicas de wireframing',
                                ],

                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Creating Low-Fidelity Wireframes',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Criando Wireframes de Baixa Fidelidade',
                                ],

                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Prototyping and Interactive Mockups',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Prototipagem e Mockups Interativos',
                                ],

                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Visual Design and Branding',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Design Visual e Branding',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Color Theory and Typography in UI Design',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Teoria de Cores e Tipografia no Design de UI',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Visual Hierarchy and Layout Design',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Hierarquia Visual e Design de Layout',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Creating a Strong Brand Identity',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Criando uma Identidade de Marca Forte',
                                ],
                                'duration' => '00:45',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Usability Testing and Iteration',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Testes de Usabilidade e Iteração',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Usability Testing Methods and Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Métodos e Técnicas de Testes de Usabilidade',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Analyzing Usability Test Results',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Analisando Resultados de Testes de Usabilidade',
                                ],
                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Iterating and Improving UX Designs',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Iterando e Melhorando Designs de UX',
                                ],
                                'duration' => '00:45',
                            ],
                        ],
                    ],
                ],
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
                'slug'                      => 'mobile-app-development',
                'expected_completion_weeks' => 8,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => 'mobile-app-development.webp',
                'additional_images'         => [
                    'mobile-app-development-2.webp',
                    'mobile-app-development-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Introduction to Mobile App Development',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Introdução ao Desenvolvimento de Aplicativos Móveis',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'What is Mobile App Development?',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'O que é Desenvolvimento de Aplicativos Móveis?',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Mobile App Development Frameworks',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Frameworks de Desenvolvimento de Aplicativos Móveis',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Building Native iOS and Android Apps',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Construindo Aplicativos Móveis Nativos iOS e Android',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Building Native iOS and Android Apps',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Construindo Aplicativos Móveis Nativos iOS e Android',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Tools You Need',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Ferramentas que Você Precisa',
                                ],
                                'duration' => '02:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Sample Apps and Projects',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Aplicativos e Projetos de Exemplo',
                                ],
                                'duration' => '02:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Building The Application',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Construindo a Aplicação',
                                ],
                                'duration' => '06:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Deploying Your App',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Deployando Sua Aplicação',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Deploying Your App',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Lancando Sua Aplicação',
                                ],
                                'duration' => '03:30',
                            ],
                        ],
                    ],
                ],
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
                'slug'                      => 'graphic-design-for-beginners',
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::BEGINNER->value,
                'teaser_image'              => 'graphic-design-for-beginners.webp',
                'additional_images'         => [
                    'graphic-design-for-beginners-2.webp',
                    'graphic-design-for-beginners-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Introduction to Graphic Design',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Introdução ao Design Gráfico',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'What is Graphic Design?',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'O que é Design Gráfico?',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Common Tools and Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Ferramentas e Princípios Comuns',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Graphic Design Process',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Processo de Design Gráfico',
                                ],
                                'duration' => '00:45',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Graphic Design as a Career',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Design Gráfico como Carreira',
                                ],
                                'duration' => '01:30',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Typography and Layout Design',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Tipografia e Design de Layout',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Typography Fundamentals',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos da Tipografia',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Layout Design Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Design de Layout',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Color Theory and Image Manipulation',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Teoria de Cores e Manipulação de Imagens',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Color Theory Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos da Teoria de Cores',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Image Manipulation Techniques',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Técnicas de Manipulação de Imagens',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Visual Design Principles',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Design Visual',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Visual Design Principles',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Principios de Design Visual',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                ],
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
                'slug'                      => 'front-end-web-development',
                'expected_completion_weeks' => 10,
                'skill_level'               => CourseSkillLevel::INTERMEDIATE->value,
                'teaser_image'              => 'front-end-web-development.webp',
                'additional_images'         => [
                    'front-end-web-development-2.webp',
                    'front-end-web-development-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'HTML and CSS Fundamentals',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de HTML e CSS',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'HTML Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de HTML',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'CSS Fundamentals',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de CSS',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Responsive Design',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Design Responsivo',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'JavaScript Fundamentals',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Fundamentos de JavaScript',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'JavaScript Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de JavaScript',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'DOM Manipulation',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Manipulação do DOM',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Event Handling',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Manipulação de Eventos',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Front-End Frameworks',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'Frameworks Front-End',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Bootstrap Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de Bootstrap',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Tailwind Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de Tailwind',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Vue.js Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de Vue.js',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Angular Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de Angular',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'React Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de React',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Next.js Basics',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Básicos de Next.js',
                                ],
                                'duration' => '01:00',
                            ],
                        ],
                    ],
                ],
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
                'slug'                      => 'advanced-javascript',
                'expected_completion_weeks' => 6,
                'skill_level'               => CourseSkillLevel::ADVANCED->value,
                'teaser_image'              => 'advanced-javascript.webp',
                'additional_images'         => [
                    'advanced-javascript-2.webp',
                    'advanced-javascript-3.webp',
                ],
                'modules' => [
                    [
                        'name' => [
                            Locale::ENGLISH->value              => 'Advanced JavaScript',
                            Locale::BRAZILIAN_PORTUGUESE->value => 'JavaScript Avançado',
                        ],
                        'lessons' => [
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Closures',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Fechamentos',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Prototypes',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Protótipos',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'Asynchronous Programming',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Programação Assíncrona',
                                ],
                                'duration' => '01:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'ES6 Features',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Recursos do ES6',
                                ],
                                'duration' => '00:50',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'ES7 Features',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Recursos do ES7',
                                ],
                                'duration' => '03:00',
                            ],
                            [
                                'name' => [
                                    Locale::ENGLISH->value              => 'ES8 Features',
                                    Locale::BRAZILIAN_PORTUGUESE->value => 'Recursos do ES8',
                                ],
                                'duration' => '02:00',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}
