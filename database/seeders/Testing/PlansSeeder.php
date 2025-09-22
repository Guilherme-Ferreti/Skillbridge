<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Enums\Locale;
use Illuminate\Database\Seeder;

final class PlansSeeder extends Seeder
{
    public function run(): void
    {
        settings('plans')->update([
            'value' => $this->plans(),
        ]);
    }

    private function plans(): array
    {
        return [
            'free' => [
                'price_per_month' => 0,
                'price_per_year'  => 0,
                'name'            => [
                    Locale::ENGLISH->value              => 'Free Plan',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Plano Gratuito',
                ],
                'features' => [
                    Locale::ENGLISH->value => [
                        'Access to selected free courses.',
                        'Limited course materials and resources.',
                        'Basic community support.',
                        'No certification upon completion.',
                        'Ad-supported platform.',
                    ],
                    Locale::BRAZILIAN_PORTUGUESE->value => [
                        'Acesso aos cursos gratuitos selecionados.',
                        'Materiais e recursos do curso limitados.',
                        'Suporte da comunidade básico.',
                        'Nenhuma certificação ao concluir o curso.',
                        'Plataforma apoiada por anúncios.',
                    ],
                ],
                'missing_features' => [
                    Locale::ENGLISH->value => [
                        'Access to exclusive Pro Plan community forums.',
                        'Early access to new courses and updates.',
                    ],
                    Locale::BRAZILIAN_PORTUGUESE->value => [
                        'Acesso exclusivo aos fórums da comunidade Plano Profissional.',
                        'Acesso antecipado aos cursos e atualizações novas.',
                    ],
                ],
            ],
            'pro' => [
                'name' => [
                    Locale::ENGLISH->value              => 'Pro Plan',
                    Locale::BRAZILIAN_PORTUGUESE->value => 'Plano Profissional',
                ],
                'price_per_month' => 79,
                'price_per_year'  => 790,
                'features'        => [
                    Locale::ENGLISH->value => [
                        'Unlimited access to all courses.',
                        'Unlimited course materials and resources.',
                        'Priority support from instructors.',
                        'Course completion certificates.',
                        'Ad-free experience.',
                        'Access to exclusive Pro Plan community forums.',
                        'Early access to new courses and updates.',
                    ],
                    Locale::BRAZILIAN_PORTUGUESE->value => [
                        'Acesso ilimitado a todos os cursos.',
                        'Materiais e recursos do curso ilimitados.',
                        'Suporte prioritário dos instrutores.',
                        'Certificação ao concluir o curso.',
                        'Experiência sem anúncios.',
                        'Acesso exclusivo aos fórums da comunidade Plano Profissional.',
                        'Acesso antecipado aos cursos e atualizações novas.',
                    ],
                ],
                'missing_features' => [
                    Locale::ENGLISH->value              => [],
                    Locale::BRAZILIAN_PORTUGUESE->value => [],
                ],
            ],
        ];
    }
}
