<section class="benefits">
    <x-section-header
        title="Benefits"
        introductoryText="Experience the future of education with flexible schedules, expert instructors, and a wide range of courses. Build your skills with practical projects and an engaging learning environment."
    >
        <x-link
            href="{{ route('home') }}"
            title="View All"
            appearance="secondary"
        >
            View All
        </x-link>
    </x-section-header>

    <or class="benefits__item-wrapper">
        @foreach ($benefits as $benefit)
            <x-card
                class="benefits__item"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <x-slot:heading class="benefits__item-heading">
                    <span class="benefits__item-number">{{ $benefit['number'] }}</span>
                </x-slot>

                <span class="benefits__item-title">{{ $benefit['title'] }}</span>

                <p class="benefits__item-description">{{ $benefit['description'] }}</p>

                <x-slot:footer class="benefits__item-footer">
                    <x-link
                        title="See More"
                        appearance="secondary"
                        :href="route('home')"
                        shape="square"
                    >
                        <x-icons.arrow-up-right />
                    </x-link>
                </x-slot>
            </x-card>
        @endforeach
    </or>
</section>
