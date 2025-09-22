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
        ];
    }
}
