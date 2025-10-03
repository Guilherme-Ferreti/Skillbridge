@props([
    'testimonial',
])

<x-card
    class="testimonial-card"
    element="li"
>
    <blockquote>
        <p class="testimonial-card__content">{{ $testimonial->quote }}</p>
    </blockquote>
    <div class="testimonial-card__footer">
        <div class="testimonial-card__author">
            <img
                src="{{ $testimonial->authorPicture() }}"
                alt="{{ $testimonial->author_name . '\'s profile picture' }}"
                loading="lazy"
            />
            <p>{{ $testimonial->author_name }}</p>
        </div>
    </div>
</x-card>
