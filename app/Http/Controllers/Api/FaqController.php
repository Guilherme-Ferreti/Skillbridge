<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

final class FaqController extends Controller
{
    public function __invoke(): AnonymousResourceCollection
    {
        $faq = collect([
            [
                'question' => 'Can I enroll in multiple courses at once?',
                'answer'   => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
            ],
            [
                'question' => 'What kind of support can I expect from instructors?',
                'answer'   => 'Our instructors are committed to helping you succeed. You can expect timely and constructive feedback on assignments, answers to your course-related questions, and guidance through more complex topics. Most courses offer direct messaging, discussion forums, or scheduled Q&A sessions to ensure you get the support you need. While response times may vary slightly depending on the course, our instructors aim to reply within 24-48 hours.',
            ],
            [
                'question' => 'Are the courses self-paced or do they have specific start and end dates?',
                'answer'   => 'Most of our courses are self-paced, allowing you to start learning at any time and progress at your own speed. This flexibility makes it easy to fit learning into your schedule. However, some programs—especially those that include live sessions or instructor-led components—may have set start and end dates. Course details will always specify the format so you know what to expect before enrolling.',
            ],
            [
                'question' => 'Are there any prerequisites for the courses?',
                'answer'   => 'Prerequisites vary depending on the course. Many of our beginner-level courses are designed with no prior experience required, making them accessible to anyone eager to learn. More advanced courses may require a basic understanding of certain topics or completion of foundational courses. You can find any prerequisites listed clearly on each course page, so you\'ll know exactly what you need before you start.',
            ],
            [
                'question' => 'Can I download the course materials for offline access?',
                'answer'   => 'Yes, many of our courses offer downloadable materials such as PDFs, worksheets, and slide decks for offline use.',
            ],
        ]);

        return FaqResource::collection($faq);
    }
}
