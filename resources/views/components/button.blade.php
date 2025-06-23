@props([
    'name',
    'color',
    'to' => null,
])

@if ($to)
    <x-link
        href="{{ $to }}"
        {{ $attributes->merge(['class' => 'button']) }}
        data-color="{{ $color }}"
    >
        {{ $name }}
    </x-link>
@else
    <button
        {{ $attributes->merge(['class' => 'button']) }}
        data-color="{{ $color }}"
    >
        {{ $name }}
    </button>
@endif
