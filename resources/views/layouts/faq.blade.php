<x-card
    class="faq"
    id="faq"
>
    <div class="faq__header">
        <h2 id="faq__heading">{{ __('Frequently Asked Questions') }}</h2>
        <p>
            {{ __('Still you have any questions? Contact our Team via') }}
            <x-basic-link
                to="mailto:support@skillbridge.com"
                target="_blank"
                rel="external"
                name="support@skillbridge.com"
            />
        </p>
    </div>

    <div class="faq__questions">
        @foreach ($faq as $question)
            <details
                class="faq__question-wrapper"
                name="faq-question"
            >
                <summary class="faq__question">
                    <span class="faq__question-text">{{ $question['question'] }}</span>
                    <div class="faq__question-icon">
                        <x-icons.plus />
                    </div>
                </summary>
                <p class="faq__answer">{!! nl2br($question['answer']) !!}</p>
            </details>
        @endforeach
    </div>
</x-card>
