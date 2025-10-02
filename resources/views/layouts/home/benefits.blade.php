<x-page.section
    class="benefits-list"
    aria-labelledby="benefits-list__heading"
>
    <x-page.section.header
        id="benefits-list__heading"
        :title="__('Benefits')"
        :introductoryText="__('Experience the future of education with flexible schedules, expert instructors, and a wide range of courses. Build your skills with practical projects and an engaging learning environment.')"
    >
        <x-button
            :to="lroute('benefits')"
            :name="__('View All')"
            color="secondary"
            aria-label="{{ __('View all benefits') }}"
        />
    </x-page.section.header>

    <ol class="flex-grid">
        @foreach ($benefits as $benefit)
            <x-card
                class="benefits-list__card"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <div class="benefits-list__card-heading">
                    <span class="benefits-list__card-number">{{ $benefit['number'] }}</span>
                </div>

                <div class="benefits-list__card-body">
                    <h3>{{ $benefit['title'] }}</h3>
                    <p class="benefits-list__card-description">{{ $benefit['description'] }}</p>
                </div>

                <div class="benefits-list__card-footer">
                    <x-icon-button
                        icon="arrow-up-right"
                        background="secondary"
                        :to="lroute('benefits')"
                        aria-label="{{ __('Learn more about our benefits') }}"
                    />
                </div>
            </x-card>
        @endforeach
    </ol>
</x-page.section>
