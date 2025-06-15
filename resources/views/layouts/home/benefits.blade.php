<section class="home-benefits">
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

    <ol class="flex-grid">
        @foreach ($benefits as $benefit)
            <x-card
                class="home-benefits__card"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <div class="home-benefits__card-heading">
                    <span class="home-benefits__card-number">{{ $benefit['number'] }}</span>
                </div>

                <div class="home-benefits__card-body">
                    <h3>{{ $benefit['title'] }}</h3>
                    <p class="home-benefits__card-description">{{ $benefit['description'] }}</p>
                </div>

                <div class="home-benefits__card-footer">
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
    </ol>
</section>
