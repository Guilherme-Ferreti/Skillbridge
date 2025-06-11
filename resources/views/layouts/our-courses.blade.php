<section class="our-courses">
    <x-section-header
        title="Our Courses"
        introductoryText="It can be tough to pick the right path for your learning journey. Our courses are designed to make that choice simpler, offering you practical knowledge and skills you can use right away."
    >
        <x-link
            href="{{ route('home') }}"
            title="View All"
            appearance="secondary"
        >
            View All
        </x-link>
    </x-section-header>

    <ul class="our-courses__cards-wrapper">
        @foreach ($courses as $course)
            <x-card
                class="our-courses__card"
                element="li"
            >
                <div class="our-courses__card-teaser-image">
                    <img
                        src="{{ $course['teaser_image'] }}"
                        alt="{{ $course['name'] }}"
                    />
                </div>
                <div class="our-courses__card-details">
                    <div class="our-courses__card-badges">
                        <x-badge :text="$course['duration']" />
                        <x-badge :text="$course['difficulty']" />
                    </div>
                    <p class="our-courses__card-instructor">By {{ $course['instructor'] }}</p>
                </div>
                <div>
                    <h3>{{ $course['name'] }}</h3>
                    <p class="our-courses__card-teaser-text">{{ $course['teaser_text'] }}</p>
                </div>
                <x-link
                    :href="route('home')"
                    title="Get it Now"
                    appearance="neutral"
                >
                    Get it Now
                </x-link>
            </x-card>
        @endforeach
    </ul>
</section>
