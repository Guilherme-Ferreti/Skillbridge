<section class="benefits">
    @foreach ($benefits as $benefit)
        <x-card>
            {{ $benefit['number'] }}
        </x-card>
    @endforeach
</section>
