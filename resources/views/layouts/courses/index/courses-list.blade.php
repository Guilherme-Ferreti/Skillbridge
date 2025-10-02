<x-page.section class="courses-list">
    @foreach ($courses as $course)
        <x-card class="courses-list__card">
            <h2>{{ $course->name }}</h2>
            <div class="courses-list__card-description">
                <p>{{ $course->teaser }}</p>
                <x-button
                    :name="__('View Course')"
                    color="gray"
                    :to="lroute('courses.show', [$course->slug])"
                />
            </div>
            <div class="courses-list__card-gallery">
                <div class="courses-list__card-gallery-image image-wrapper">
                    <img
                        src="{{ $course->teaserImage() }}"
                        alt="{{ $course->name }}"
                        loading="lazy"
                        role="presentation"
                    />
                </div>
                @foreach ($course->getMedia('additional-images') as $image)
                    <div class="courses-list__card-gallery-image image-wrapper">
                        <img
                            src="{{ $image->getUrl() }}"
                            alt="{{ $course->name }}"
                            loading="lazy"
                            role="presentation"
                        />
                    </div>
                @endforeach
            </div>

            <x-course-card-details :$course />

            <div class="courses-list__card-curriculum">
                <h3 class="courses-list__card-curriculum-title">Curriculum</h3>
                <ol class="courses-list__card-modules">
                    @foreach ($course->modules as $module)
                        <li
                            class="courses-list__card-module"
                            value="{{ $loop->iteration }}"
                        >
                            <span class="courses-list__card-module-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            {{ $module->name }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </x-card>
    @endforeach
</x-page.section>
