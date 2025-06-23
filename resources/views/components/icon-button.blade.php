@props([
    'icon',
    'background' => 'gray',
    'shape' => 'square',
    'to' => null,
])

@if ($to)
    <x-link
        href="{{ $to }}"
        data-background="{{ $background }}"
        data-shape="{{ $shape }}"
        {{ $attributes->merge(['class' => 'icon-button']) }}
    >
        <x-dynamic-component :component="'icons.' . $icon" />
    </x-link>
@else
    <button
        data-shape="{{ $shape }}"
        data-background="{{ $background }}"
        {{ $attributes->merge(['class' => 'icon-button']) }}
    >
        <x-dynamic-component :component="'icons.' . $icon" />
    </button>
@endif
