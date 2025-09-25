@props([
    'icon',
    'title',
    'text',
])

<x-card
    class="milestone-card"
    element="li"
>
    <div class="milestone-card__icon-wrapper">
        <x-dynamic-component :component="'icons.' . $icon" />
    </div>
    <h3 class="milestone-card__title">{{ $title }}</h3>
    <p>{{ $text }}</p>
</x-card>
