<x-page.section
    class="courses-list"
    aria-labelledby="courses-list__heading"
>
    <x-page.section.header
        id="courses-list__heading"
        :title="__('Our Courses')"
        :introductoryText="__('It can be tough to pick the right path for your learning journey. Our courses are designed to make that choice simpler, offering you practical knowledge and skills you can use right away.')"
    >
        <x-button
            :to="lroute('courses.index')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all courses') }}"
        />
    </x-page.section.header>

    <ul class="flex-grid">
        @foreach ($courses as $course)
            <x-card
                class="courses-list__card"
                element="li"
            >
                <div class="courses-list__card-teaser-image">
                    <img
                        src="{{ $course->teaserImage() }}"
                        alt="{{ $course->name }}"
                        loading="lazy"
                        role="presentation"
                    />
                </div>
                <x-course-card-details :$course />
                <div>
                    <h3>{{ $course->name }}</h3>
                    <p class="courses-list__card-teaser-text">{{ $course->teaser }}</p>
                </div>
                <x-button
                    :to="lroute('home')"
                    :name="__('Get it Now')"
                    color="gray"
                    aria-label="{{ __('Get :course now', ['course' => $course->name]) }}"
                />
            </x-card>
        @endforeach
    </ul>
</x-page.section>
