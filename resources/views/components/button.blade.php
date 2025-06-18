@props([
    'name',
    'color',
    'to' => null,
])

@if ($to)
    <a
        href="{{ $to }}"
        {{ $attributes->merge(['class' => 'button']) }}
        data-color="{{ $color }}"
    >
        {{ $name }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'button']) }}
        data-color="{{ $color }}"
    >
        {{ $name }}
    </button>
@endif
