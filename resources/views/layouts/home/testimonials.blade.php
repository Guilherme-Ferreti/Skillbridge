<section class="home-testimonials">
    <x-section-header
        title="Our Testimonials"
        introductoryText="Explore our collection of inspiring testimonials where past students share their experiences with our e-learning courses. "
    >
        <x-button
            :to="route('home')"
            name="View All"
            color="secondary"
        />
    </x-section-header>

    <ul class="flex-grid">
        @foreach ($testimonials as $testimonial)
            <x-card
                class="home-testimonials__card"
                element="li"
            >
                <p class="home-testimonials__card-content">{{ $testimonial['testimonial'] }}</p>
                <div class="home-testimonials__card-footer">
                    <div class="home-testimonials__card-author">
                        <img
                            src="{{ $testimonial['author_picture'] }}"
                            alt="{{ $testimonial['author_name'] . '\'s profile picture' }}"
                            loading="lazy"
                        />
                        <p>{{ $testimonial['author_name'] }}</p>
                    </div>
                    <x-button
                        :to="route('home')"
                        name="Read Full Story"
                        color="gray"
                    />
                </div>
            </x-card>
        @endforeach
    </ul>
</section>
