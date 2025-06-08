@props([
    'href',
    'title',
    'appearance' => 'link',
    'shape' => 'default',
])

<a
    class="link"
    href="{{ $href }}"
    title="{{ $title }}"
    data-appearance="{{ $appearance }}"
    data-shape="{{ $shape }}"
>
    {{ $slot }}
</a>
