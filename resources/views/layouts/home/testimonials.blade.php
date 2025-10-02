<x-page.section
    class="testimonials-list"
    aria-labelledby="testimonials-list__heading"
>
    <x-page.section.header
        id="testimonials-list__heading"
        :title="__('Our Testimonials')"
        :introductoryText="__('Explore our collection of inspiring testimonials where past students share their experiences with our e-learning courses.')"
    >
        <x-button
            :to="lroute('testimonials')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all testimonials') }}"
        />
    </x-page.section.header>

    <ul class="flex-grid">
        @foreach ($testimonials as $testimonial)
            <x-testimonial-card :$testimonial />
        @endforeach
    </ul>
</x-page.section>
