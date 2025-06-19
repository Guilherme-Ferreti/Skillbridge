@php
    $faqQuestions = [
        [
            'question' => 'Can I enroll in multiple courses at once?',
            'answer' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
            'redirect_to' => [
                'url' => route('home'),
                'label' => 'Enrollment Process for Different Courses',
            ],
        ],
        [
            'question' => 'What kind of support can I expect from instructors?',
            'answer' => 'Our instructors are committed to helping you succeed. You can expect timely and constructive feedback on assignments, answers to your course-related questions, and guidance through more complex topics. Most courses offer direct messaging, discussion forums, or scheduled Q&A sessions to ensure you get the support you need. While response times may vary slightly depending on the course, our instructors aim to reply within 24-48 hours.',
            'redirect_to' => null,
        ],
        [
            'question' => 'Are the courses self-paced or do they have specific start and end dates?',
            'answer' => 'Most of our courses are self-paced, allowing you to start learning at any time and progress at your own speed. This flexibility makes it easy to fit learning into your schedule. However, some programs—especially those that include live sessions or instructor-led components—may have set start and end dates. Course details will always specify the format so you know what to expect before enrolling.',
            'redirect_to' => null,
        ],
        [
            'question' => 'Are there any prerequisites for the courses?',
            'answer' => 'Prerequisites vary depending on the course. Many of our beginner-level courses are designed with no prior experience required, making them accessible to anyone eager to learn. More advanced courses may require a basic understanding of certain topics or completion of foundational courses. You can find any prerequisites listed clearly on each course page, so you\'ll know exactly what you need before you start.',
            'redirect_to' => null,
        ],
        [
            'question' => 'Can I download the course materials for offline access?',
            'answer' => 'Yes, many of our courses offer downloadable materials such as PDFs, worksheets, and slide decks for offline use.',
            'redirect_to' => null,
        ],
    ];
@endphp

<x-card class="faq">
    <div class="faq__header">
        <h2>Frequently Asked Questions</h2>
        <p>
            Still you have any questions? Contact our Team via
            <a
                href="mailto:support@skillbridge.com"
                target="_blank"
            >
                support@skillbridge.com
            </a>
        </p>
    </div>

    <ul class="faq__questions">
        @foreach ($faqQuestions as $question)
            <div
                class="faq__question-wrapper"
                element="li"
                x-data="{ open: false }"
            >
                <div
                    class="faq__question"
                    @click="open = !open"
                >
                    <h3>{{ $question['question'] }}</h3>
                    <x-icon-button
                        class="faq__question-icon"
                        type="button"
                        icon="plus"
                        background="primary"
                        aria-label="show answer"
                    />
                </div>
                <div
                    class="faq__answer"
                    x-show="open"
                    x-cloak
                    x-transition.duration.350ms
                    x-transition.opacity
                >
                    <p>{{ $question['answer'] }}</p>
                </div>
            </div>
        @endforeach
    </ul>
</x-card>
