<x-page.section class="testimonials-list">
    <ul class="flex-grid">
        @foreach ($testimonials as $testimonial)
            <x-testimonial-card :$testimonial />
        @endforeach
    </ul>
</x-page.section>
