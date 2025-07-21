<section
    class="home-benefits"
    aria-labelledby="home-benefits__heading"
>
    <x-section-header
        id="home-benefits__heading"
        :title="__('Benefits')"
        :introductoryText="__('Experience the future of education with flexible schedules, expert instructors, and a wide range of courses. Build your skills with practical projects and an engaging learning environment.')"
    >
        <x-button
            :to="lroute('home')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all benefits') }}"
        />
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
                    <x-icon-button
                        icon="arrow-up-right"
                        background="secondary"
                        :to="lroute('home')"
                        aria-label="{{ __('Learn more about our benefits') }}"
                    />
                </div>
            </x-card>
        @endforeach
    </ol>
</section>
