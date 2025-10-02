<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\Locale;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

final class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->testimonials() as $testimonial) {
            $authorImage = Arr::pull($testimonial, 'author_image');

            $testimonial = Testimonial::create($testimonial);

            $testimonial
                ->addMedia(resource_path("images/testimonials/{$authorImage}"))
                ->preservingOriginal()
                ->toMediaCollection('author-image');
        }
    }

    private function testimonials(): array
    {
        return [
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'O curso de design web proporcionou uma base solida para mim. Os instrutores eram conhecidos e apoiadores, e o ambiente de aprendizado interativo era engajante. Recomendo muito!',
                ],
                'author_name'  => 'Sarah L',
                'author_image' => 'profile-picture-1.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'The UI/UX design course exceeded my expectations. The instructor\'s expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'O curso de design UI/UX superou minhas expectativas. A habilidade do instrutor e os trabalhos práticos ajudaram a melhorar minhas habilidades de design. Agora sinto mais confiante na minha carreira. Obrigado!',
                ],
                'author_name'  => 'Jason M',
                'author_image' => 'profile-picture-2.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I\'m now building my own app. Great course!',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'O curso de desenvolvimento de aplicativos móveis foi incrível! Os tutoriais passo a passo e os projetos práticos ajudaram a entender os conceitos facilmente. Agora estou construindo meu próprio aplicativo. Curso incrível!',
                ],
                'author_name'  => 'Emily R',
                'author_image' => 'profile-picture-3.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my design abilities significantly. I\'m grateful for this course!',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Me inscrevi no curso de design gráfico como iniciante, e foi o ponto de partida perfeito. A orientação e o feedback do instrutor melhoraram significativamente minhas habilidades de design. Sou grato por este curso!',
                ],
                'author_name'  => 'Michael K',
                'author_image' => 'profile-picture-4.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'The graphic design course helped me improve my composition skills and provided valuable feedback on my designs. The instructor was knowledgeable and supportive throughout the course.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'O curso de design gráfico me ajudou a aprimorar minhas habilidades de composição e me deu um feedback valioso sobre meus designs. O instrutor foi muito bem informado e me apoiou durante todo o curso.',
                ],
                'author_name'  => 'Sophia L',
                'author_image' => 'profile-picture-1.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'I was hesitant to enroll in the digital marketing course, but the instructor\'s expertise and guidance made it an enjoyable learning experience. I highly recommend it to anyone looking to improve their marketing skills.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Eu estava hesitante em me inscrever no curso de marketing digital, mas a habilidade do instrutor e a orientação fizeram dele uma experiência de aprendizado agradável. Recomendo muito a quem procura melhorar suas habilidades de marketing!',
                ],
                'author_name'  => 'Rachel K',
                'author_image' => 'profile-picture-2.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'The web development course provided a solid foundation in HTML, CSS, and JavaScript. The instructor was knowledgeable and supportive, and the interactive learning environment was engaging.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'O curso de desenvolvimento web forneceu uma base solida em HTML, CSS e JavaScript. O instrutor foi conhecido e apoiador, e o ambiente de aprendizado interativo era engajante.',
                ],
                'author_name'  => 'Kevin B',
                'author_image' => 'profile-picture-3.webp',
            ],
            [
                'quote' => [
                    Locale::ENGLISH->value              => 'I enrolled in the data science course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my data analysis abilities significantly.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Me inscrevi no curso de ciência de dados como iniciante, e foi o ponto de partida perfeito. A orientação e o feedback do instrutor melhoraram significativamente minhas habilidades de análise de dados.',
                ],
                'author_name'  => 'Julia T',
                'author_image' => 'profile-picture-4.webp',
            ],
        ];
    }
}
