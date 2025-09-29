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
                <h3 class="courses-list__card-curriculum-title">Curriculum</h3>
                <ol class="courses-list__card-modules">
                    @foreach ($course->modules as $module)
                        <li value="{{ $loop->iteration }}" class="courses-list__card-module">
                            <span class="courses-list__card-module-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            {{ $module->name }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </x-card>
    @endforeach
</x-page.section>
