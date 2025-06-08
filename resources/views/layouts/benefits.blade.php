<section class="benefits">
    <h2>Benefits</h2>

    <div class="benefits__description">
        <p>
            Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget
            habitasse in velit fringilla feugiat senectus in.
        </p>
        <x-link
            href="{{ route('home') }}"
            title="View All"
            appearance="secondary"
        >
            View All
        </x-link>
    </div>

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
