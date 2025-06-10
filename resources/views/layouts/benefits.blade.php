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

    <or class="benefits__cards-wrapper">
        @foreach ($benefits as $benefit)
            <x-card
                class="benefits__card"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <div class="benefits__card-heading">
                    <span class="benefits__card-number">{{ $benefit['number'] }}</span>
                </div>

                <div class="benefits__card_body">
                    <span class="benefits__card-title">{{ $benefit['title'] }}</span>
                    <p class="benefits__card-description">{{ $benefit['description'] }}</p>
                </div>

                <div class="benefits__card-footer">
                    <x-link
                        title="See More"
                        appearance="secondary"
                        :href="route('home')"
                        shape="square"
                    >
                        <x-icons.arrow-up-right />
                    </x-link>
                </div>
            </x-card>
        @endforeach
    </or>
</section>
