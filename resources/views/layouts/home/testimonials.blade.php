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
            :to="lroute('home')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all testimonials') }}"
        />
    </x-page.section.header>

    <ul class="flex-grid">
        @foreach ($testimonials as $testimonial)
            <x-card
                class="testimonials-list__card"
                element="li"
            >
                <blockquote>
                    <p class="testimonials-list__card-content">{{ $testimonial->quote }}</p>
                </blockquote>
                <div class="testimonials-list__card-footer">
                    <div class="testimonials-list__card-author">
                        <img
                            src="{{ $testimonial->authorImage() }}"
                            alt="{{ $testimonial->author_name . '\'s profile picture' }}"
                            loading="lazy"
                        />
                        <p>{{ $testimonial->author_name }}</p>
                    </div>
                    <x-button
                        :to="lroute('home')"
                        :name="__('Read Full Story')"
                        color="gray"
                        aria-label="{{ __('Read :author\'s full story', ['author' => $testimonial->author_name]) }}"
                    />
                </div>
            </x-card>
        @endforeach
    </ul>
</x-page.section>
