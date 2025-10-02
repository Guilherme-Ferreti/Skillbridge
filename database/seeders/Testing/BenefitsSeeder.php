<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\Locale;
use Illuminate\Database\Seeder;

final class BenefitsSeeder extends Seeder
{
    public function run(): void
    {
        settings('benefits')->update([
            'value' => $this->benefits(),
        ]);
    }

    private function benefits(): array
    {
        return [
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Flexible Learning Schedule',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Cronograma de Aprendizado Flexível',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Fit your coursework around your existing commitments and obligations.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Ajuste o seu cronograma de aprendizado conforme suas obrigações e compromissos.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Expert Instruction',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Instrução de Expert',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Learn from industry experts who have hands-on experience in design and development.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Aprenda com experts da indústria que tem experiência prática em design e desenvolvimento.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Diverse Course Offerings',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Ofertas de Curso Diversas',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Explore a wide range of design and development courses covering various topics.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Explore uma ampla variedade de cursos de design e desenvolvimento abrangendo diversos temas.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Updated Curriculum',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Curriculum Atualizado',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Acesse cursos com conteúdo atualizado refletindo as tendências mais recentes e práticas industriais.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Practical Projects and Assignments',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Projetos e Atividades Práticas',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Develop a portfolio showcasing your skills and abilities to potential employers.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Desenvolva um portfólio mostrando suas habilidades e capacidades para empregadores potenciais.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Interactive Learning Environment',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Ambiente de Aprendizado Interativo',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Colabore com outros aprendizes, trocando ideias e feedback para melhorar sua compreensão.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Career Guidance and Mentorship',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Orientação de Carreira e Mentoria',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Get guidance from experienced professionals and instructors on how to advance your career.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Receba orientação de profissionais experientes e instrutores sobre como avançar sua carreira.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Industry Network and Connections',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Rede e Conexões Industriais',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Connect with industry professionals, influencers, and thought leaders to expand your network.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Conecte-se com profissionais da indústria, influenciadores e líderes de opinião para expandir sua rede.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Personalized Learning Paths',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Caminhos de Aprendizado Personalizados',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Create a customized learning plan tailored to your goals and preferences.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Crie um plano de aprendizado personalizado de acordo com seus objetivos e preferências.',
                ],
            ],
            [
                'title' => [
                    Locale::ENGLISH->value              => 'Community Support and Forums',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Suporte Comunitário e Fóruns',
                ],
                'description' => [
                    Locale::ENGLISH->value              => 'Get support from a community of learners and instructors through online forums and discussion boards.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Receba suporte de uma comunidade de aprendizes e instrutores por meio de fóruns e painéis de discussão online.',
                ],
            ],
        ];
    }
}
