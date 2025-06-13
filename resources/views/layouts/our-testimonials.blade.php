<section class="our-testimonials">
    <x-section-header
        title="Our Testimonials"
        introductoryText="Explore our collection of inspiring testimonials where past students share their experiences with our e-learning courses. "
    >
        <x-link
            href="{{ route('home') }}"
            title="View All"
            appearance="secondary"
        >
            View All
        </x-link>
    </x-section-header>

    <ul class="flex-grid">
        @foreach ($testimonials as $testimonial)
            <x-card
                class="our-testimonials__card"
                element="li"
            >
                <p class="our-testimonials__card-content">{{ $testimonial['testimonial'] }}</p>
                <div class="our-testimonials__card-footer">
                    <div class="our-testimonials__card-author">
                        <img
                            src="{{ $testimonial['author_picture'] }}"
                            alt="{{ $testimonial['author_name'] . '\'s profile picture' }}"
                            loading="lazy"
                        />
                        <p>{{ $testimonial['author_name'] }}</p>
                    </div>
                    <x-link
                        href="{{ route('home') }}"
                        title="Read Full Story"
                        appearance="neutral"
                    >
                        Read Full Story
                    </x-link>
                </div>
            </x-card>
        @endforeach
    </ul>
</section>
