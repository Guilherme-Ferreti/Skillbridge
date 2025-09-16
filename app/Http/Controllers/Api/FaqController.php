<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\ListFaq;
use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

final class FaqController extends Controller
{
    public function __invoke(): AnonymousResourceCollection
    {
        $faq = app(ListFaq::class)->handle();

        return FaqResource::collection($faq);
    }
}
