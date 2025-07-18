<section
    class="home-testimonials"
    aria-labelledby="home-testimonials__heading"
>
    <x-section-header
        id="home-testimonials__heading"
        :title="__('Our Testimonials')"
        :introductoryText="__('Explore our collection of inspiring testimonials where past students share their experiences with our e-learning courses.')"
    >
        <x-button
            :to="route('home')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all testimonials') }}"
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
                            alt="{{ $testimonial['author_name'] . '\'s profile picture' }}"
                            loading="lazy"
                        />
                        <p>{{ $testimonial['author_name'] }}</p>
                    </div>
                    <x-button
                        :to="route('home')"
                        :name="__('Read Full Story')"
                        color="gray"
                        aria-label="{{ __('Read :author\'s full story', ['author' => $testimonial['author_name']]) }}"
                    />
                </div>
            </x-card>
        @endforeach
    </ul>
</section>
