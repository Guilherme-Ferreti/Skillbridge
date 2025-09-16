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
                'question_' . Locale::ENGLISH->value => 'Can I enroll in multiple courses at once?',
                'answer_' . Locale::ENGLISH->value   => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',

                'question_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Posso me inscrever em vários cursos ao mesmo tempo?',
                'answer_' . Locale::BRAZILIAN_PORTUGUESE->value   => 'Sim! Vocês pode se inscrever em vários cursos ao mesmo tempo e os acessar quando quiser.',
            ],
            [
                'question_' . Locale::ENGLISH->value => 'What kind of support can I expect from instructors?',
                'answer_' . Locale::ENGLISH->value   => 'Our instructors are committed to helping you succeed. You can expect timely and constructive feedback on assignments, answers to your course-related questions, and guidance through more complex topics. Most courses offer direct messaging, discussion forums, or scheduled Q&A sessions to ensure you get the support you need. While response times may vary slightly depending on the course, our instructors aim to reply within 24-48 hours.',

                'question_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Qual tipo de apoio eu posso esperar dos instrutores?',
                'answer_' . Locale::BRAZILIAN_PORTUGUESE->value   => 'Nossos instrutores estão comprometidos em ajudar você a ter sucesso. Você pode esperar feedback pontual e construtivo sobre as tarefas, respostas às suas perguntas relacionadas ao curso e orientação em tópicos mais complexos. A maioria dos cursos oferece mensagens diretas, fóruns de discussão ou sessões de perguntas e respostas agendadas para garantir que você receba o suporte necessário. Embora o tempo de resposta possa variar ligeiramente dependendo do curso, nossos instrutores têm como objetivo responder dentro de 24 a 48 horas.',
            ],
            [
                'question_' . Locale::ENGLISH->value => 'Are the courses self-paced or do they have specific start and end dates?',
                'answer_' . Locale::ENGLISH->value   => 'Most of our courses are self-paced, allowing you to start learning at any time and progress at your own speed. This flexibility makes it easy to fit learning into your schedule. However, some programs—especially those that include live sessions or instructor-led components—may have set start and end dates. Course details will always specify the format so you know what to expect before enrolling.',

                'question_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Os cursos são autodidatas ou têm datas específicas de início e término?',
                'answer_' . Locale::BRAZILIAN_PORTUGUESE->value   => 'A maioria dos nossos cursos é autodidata, permitindo que você comece a aprender a qualquer momento e progrida no seu próprio ritmo. Essa flexibilidade facilita a adaptação do aprendizado à sua agenda. No entanto, alguns programas — especialmente aqueles que incluem sessões presenciais ou componentes ministrados por instrutores — podem ter datas de início e término definidas. Os detalhes do curso sempre especificarão o formato para que você saiba o que esperar antes de se inscrever.',
            ],
            [
                'question_' . Locale::ENGLISH->value => 'Are there any prerequisites for the courses?',
                'answer_' . Locale::ENGLISH->value   => 'Prerequisites vary depending on the course. Many of our beginner-level courses are designed with no prior experience required, making them accessible to anyone eager to learn. More advanced courses may require a basic understanding of certain topics or completion of foundational courses. You can find any prerequisites listed clearly on each course page, so you\'ll know exactly what you need before you start.',

                'question_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Há algum pré-requisito para os cursos?',
                'answer_' . Locale::BRAZILIAN_PORTUGUESE->value   => 'Os pré-requisitos variam dependendo do curso. Muitos dos nossos cursos para iniciantes são elaborados sem a necessidade de experiência prévia, tornando-os acessíveis a qualquer pessoa interessada em aprender. Cursos mais avançados podem exigir um conhecimento básico de determinados tópicos ou a conclusão de cursos básicos. Você pode encontrar os pré-requisitos listados claramente na página de cada curso, para que saiba exatamente o que precisa antes de começar.',
            ],
            [
                'question_' . Locale::ENGLISH->value => 'Can I download the course materials for offline access?',
                'answer_' . Locale::ENGLISH->value   => 'Yes, many of our courses offer downloadable materials such as PDFs, worksheets, and slide decks for offline use.',

                'question_' . Locale::BRAZILIAN_PORTUGUESE->value => 'Posso baixar os materiais do curso para acesso offline?',
                'answer_' . Locale::BRAZILIAN_PORTUGUESE->value   => 'Sim, muitos dos nossos cursos oferecem materiais para download, como PDFs, planilhas e slides para uso offline.',
            ],
        ];
    }
}
