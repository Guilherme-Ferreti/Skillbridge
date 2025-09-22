<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\Locale;
use Illuminate\Database\Seeder;

final class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        settings('faq')->update([
            'value' => $this->frequentlyAskedQuestions(),
        ]);
    }

    private function frequentlyAskedQuestions(): array
    {
        return [
            [
                'question' => [
                    Locale::ENGLISH->value              => 'Can I enroll in multiple courses at once?',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Posso me inscrever em vários cursos ao mesmo tempo?',
                ],
                'answer' => [
                    Locale::ENGLISH->value              => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Sim! Vocês pode se inscrever em vários cursos ao mesmo tempo e os acessar quando quiser.',
                ],
            ],
            [
                'question' => [
                    Locale::ENGLISH->value              => 'What kind of support can I expect from instructors?',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Qual tipo de apoio eu posso esperar dos instrutores?',
                ],
                'answer' => [
                    Locale::ENGLISH->value              => 'Our instructors are committed to helping you succeed. You can expect timely and constructive feedback on assignments, answers to your course-related questions, and guidance through more complex topics.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Nossos instrutores estão comprometidos em ajudar você a ter sucesso. Você pode esperar feedback pontual e construtivo sobre as tarefas, respostas às suas perguntas relacionadas ao curso e orientação em tópicos mais complexos.',
                ],
            ],
            [
                'question' => [
                    Locale::ENGLISH->value              => 'Are the courses self-paced or do they have specific start and end dates?',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Os cursos são autodidatas ou têm datas específicas de início e término?',
                ],
                'answer' => [
                    Locale::ENGLISH->value              => 'Most of our courses are self-paced, allowing you to start learning at any time and progress at your own speed.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'A maioria dos nossos cursos é autodidata, permitindo que você comece a aprender a qualquer momento e progrida no seu próprio ritmo.',
                ],
            ],
            [
                'question' => [
                    Locale::ENGLISH->value              => 'Are there any prerequisites for the courses?',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Há algum pré-requisito para os cursos?',
                ],
                'answer' => [
                    Locale::ENGLISH->value              => 'Prerequisites vary depending on the course.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Os pré-requisitos variam dependendo do curso.',
                ],
            ],
            [
                'question' => [
                    Locale::ENGLISH->value              => 'Can I download the course materials for offline access?',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Posso baixar os materiais do curso para acesso offline?',
                ],
                'answer' => [
                    Locale::ENGLISH->value              => 'Yes, many of our courses offer downloadable materials such as PDFs, worksheets, and slide decks for offline use.',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Sim, muitos dos nossos cursos oferecem materiais para download, como PDFs, planilhas e slides para uso offline.',
                ],
            ],
        ];
    }
}
