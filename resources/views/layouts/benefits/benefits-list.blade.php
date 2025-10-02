<x-page.section class="benefits-list">
    <ol data-masonry='{ "itemSelector": ".benefits-list__card", "percentPosition": true, "gutter": 20 }'>
        @foreach ($benefits as $benefit)
            <x-card
                class="benefits-list__card"
                element="li"
                value="{{ $loop->iteration }}"
            >
                <span class="benefits-list__card-number">{{ $benefit['number'] }}</span>

                <h2>{{ $benefit['title'] }}</h2>
                <p class="benefits-list__card-description">{{ $benefit['description'] }}</p>
            </x-card>
        @endforeach
    </ol>
</x-page.section>
