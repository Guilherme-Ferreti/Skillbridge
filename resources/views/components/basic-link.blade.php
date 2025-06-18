@props([
    'to',
    'name',
])

<a
    href="{{ $to }}"
    {{ $attributes->merge(['class' => 'basic-link']) }}
>
    {{ $name }}
</a>
