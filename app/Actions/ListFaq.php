<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Collection;

final class ListFaq
{
    public function handle(): Collection
    {
        return collect(settings('faq')->value)->map(fn (array $faq) => [
            'question' => $faq['question_' . app()->getLocale()],
            'answer'   => $faq['answer_' . app()->getLocale()],
        ]);
    }
}
