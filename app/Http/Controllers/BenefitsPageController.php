<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ListBenefits;
use Illuminate\View\View;

final class BenefitsPageController extends Controller
{
    public function __invoke(): View
    {
        $benefits = app(ListBenefits::class)->handle();

        return view('pages.benefits', compact('benefits'));
    }
}
