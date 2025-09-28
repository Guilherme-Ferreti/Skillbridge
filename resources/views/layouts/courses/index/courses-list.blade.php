<x-page.section class="courses-list">
    @foreach ($courses as $course)
        <x-card class="courses-list__card">
            <h2>{{ $course->name }}</h2>
            <div class="courses-list__card-description">
                <p>{{ $course->teaser }}</p>
                <x-button
                    :name="__('View Course')"
                    color="gray"
                />
            </div>
            <div class="courses-list__card-gallery"></div>

            <x-course-card-details :$course />

            <div class="courses-list__card-curriculum">
                <h3>Curriculum</h3>
                <ol>
                    <li value="1">Item</li>
                </ol>
            </div>
        </x-card>
    @endforeach
</x-page.section>
