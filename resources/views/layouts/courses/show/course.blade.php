<x-page.section class="course">
    <div class="course__images">
        <div class="course__image image-wrapper">
            <img
                src="{{ $course->teaserImage() }}"
                alt="{{ $course->name }}"
                loading="lazy"
                role="presentation"
            />
        </div>

        @foreach ($course->getMedia('additional-images') as $image)
            <div class="image-wrapper">
                <img
                    src="{{ $image->getUrl() }}"
                    alt="{{ $course->name }}"
                    loading="lazy"
                    role="presentation"
                />
            </div>
        @endforeach
    </div>

    <ol data-masonry='{ "itemSelector": ".course__module", "percentPosition": true, "gutter": 20 }'>
        @foreach ($course->modules as $module)
            <x-card
                class="course__module"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <span class="course__module-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                <h2 class="course__module-name">{{ $module->name }}</h2>
                <ol class="course__lessons">
                    @foreach ($module->lessons as $lesson)
                        <li
                            class="course__lesson"
                            value="{{ $loop->iteration }}"
                        >
                            <div>
                                <p class="course__lesson-name">{{ $lesson->name }}</p>
                                <p class="course__lesson-number">{{ __('Lesson') . ' ' . str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                            </div>
                            <div class="course__lesson-duration">
                                <x-icons.clock />
                                {{ $lesson->duration }}
                            </div>
                        </li>
                    @endforeach
                </ol>
            </x-card>
        @endforeach
    </ol>
</x-page.section>
