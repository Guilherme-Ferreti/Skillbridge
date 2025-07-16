<section
    class="home-courses"
    aria-labelledby="home-courses__heading"
>
    <x-section-header
        id="home-courses__heading"
        title="Our Courses"
        introductoryText="It can be tough to pick the right path for your learning journey. Our courses are designed to make that choice simpler, offering you practical knowledge and skills you can use right away."
    >
        <x-button
            :to="route('home')"
            name="View All"
            color="secondary"
            aria-label="View all courses"
        />
    </x-section-header>

    <ul class="flex-grid">
        @foreach ($courses as $course)
            <x-card
                class="home-courses__card"
                element="li"
            >
                <div class="home-courses__card-teaser-image">
                    <img
                        src="{{ $course->teaserImage() }}"
                        alt="{{ $course->name }}"
                        loading="lazy"
                        role="presentation"
                    />
                </div>
                <div class="home-courses__card-details">
                    <div class="home-courses__card-badges">
                        <x-badge :text="$course->expected_completion_weeks . ' Weeks'" />
                        <x-badge :text="$course->skill_level->label()" />
                    </div>
                    <p class="home-courses__card-instructor">By {{ $course->instructor->name }}</p>
                </div>
                <div>
                    <h3>{{ $course->name }}</h3>
                    <p class="home-courses__card-teaser-text">{{ $course->teaser }}</p>
                </div>
                <x-button
                    :to="route('home')"
                    name="Get it Now"
                    color="gray"
                    aria-label="Get {{ $course->name }} now"
                />
            </x-card>
        @endforeach
    </ul>
</section>
