@props([
    'type',
])

<input
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'form-input']) }}
/>
