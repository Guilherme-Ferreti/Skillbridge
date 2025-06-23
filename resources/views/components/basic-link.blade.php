@props([
    'to',
    'name',
])

<x-link
    href="{{ $to }}"
    {{ $attributes->merge(['class' => 'basic-link']) }}
>
    {{ $name }}
</x-link>
