<section
    class="home-courses"
    aria-labelledby="home-courses__heading"
>
    <x-section-header
        id="home-courses__heading"
        :title="__('Our Courses')"
        :introductoryText="__('It can be tough to pick the right path for your learning journey. Our courses are designed to make that choice simpler, offering you practical knowledge and skills you can use right away.')"
    >
        <x-button
            :to="route('home')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all courses') }}"
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
                        <x-badge
                            :text="trans_choice(':value Week|:value Weeks', $course->expected_completion_weeks, ['value' => $course->expected_completion_weeks])"
                        />
                        <x-badge :text="$course->skill_level->label()" />
                    </div>
                    <p class="home-courses__card-instructor">{{ __('By :instructor', ['instructor' => $course->instructor->name]) }}</p>
                </div>
                <div>
                    <h3>{{ $course->name }}</h3>
                    <p class="home-courses__card-teaser-text">{{ $course->teaser }}</p>
                </div>
                <x-button
                    :to="route('home')"
                    :name="__('Get it Now')"
                    color="gray"
                    aria-label="{{ __('Get :course now', ['course' => $course->name]) }}"
                />
            </x-card>
        @endforeach
    </ul>
</section>
