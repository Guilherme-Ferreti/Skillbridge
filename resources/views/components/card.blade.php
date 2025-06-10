@props([
    'element' => 'div',
])

<{{ $element }} {{ $attributes->merge(['class' => 'card']) }}>
    {{ $slot }}
</{{ $element }}>
