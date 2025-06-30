<section
    class="home-testimonials"
    aria-labelledby="home-testimonials__heading"
>
    <x-section-header
        id="home-testimonials__heading"
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
                <blockquote>
                    <p class="home-testimonials__card-content">{{ $testimonial['testimonial'] }}</p>
                </blockquote>
                <div class="home-testimonials__card-footer">
                    <div class="home-testimonials__card-author">
                        <img
                            src="{{ $testimonial['author_picture'] }}"
                            alt="{{ $testimonial['author_name'] }}"
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
