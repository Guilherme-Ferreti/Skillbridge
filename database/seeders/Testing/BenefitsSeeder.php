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
                'title_' . Locale::ENGLISH->value       => 'Flexible Learning Schedule',
                'description_' . Locale::ENGLISH->value => 'Fit your coursework around your existing commitments and obligations.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Cronograma de Aprendizado Flexível',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Ajuste o seu cronograma de aprendizado conforme suas obrigações e compromissos.',
            ],
            [
                'title_' . Locale::ENGLISH->value       => 'Expert Instruction',
                'description_' . Locale::ENGLISH->value => 'Learn from industry experts who have hands-on experience in design and development.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Instrução de Expert',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Aprenda com experts da indústria que tem experiência prática em design e desenvolvimento.',
            ],
            [
                'title_' . Locale::ENGLISH->value       => 'Diverse Course Offerings',
                'description_' . Locale::ENGLISH->value => 'Explore a wide range of design and development courses covering various topics.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Ofertas de Curso Diversas',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Explore uma ampla variedade de cursos de design e desenvolvimento abrangendo diversos temas.',
            ],
            [
                'title_' . Locale::ENGLISH->value       => 'Updated Curriculum',
                'description_' . Locale::ENGLISH->value => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Curriculum Atualizado',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Acesse cursos com conteúdo atualizado refletindo as tendências mais recentes e práticas industriais.',
            ],
            [
                'title_' . Locale::ENGLISH->value       => 'Practical Projects and Assignments',
                'description_' . Locale::ENGLISH->value => 'Develop a portfolio showcasing your skills and abilities to potential employers.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Projetos e Atividades Práticas',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Desenvolva um portfólio mostrando suas habilidades e capacidades para empregadores potenciais.',
            ],
            [
                'title_' . Locale::ENGLISH->value       => 'Interactive Learning Environment',
                'description_' . Locale::ENGLISH->value => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',

                'title_' . Locale::BRAZILIAN_PORTUGUESE->value       => 'Ambiente de Aprendizado Interativo',
                'description_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Colabore com outros aprendizes, trocando ideias e feedback para melhorar sua compreensão.',
            ],
        ];
    }
}
