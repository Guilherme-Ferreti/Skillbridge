@props([
    'href',
    'title',
    'appearance' => 'link',
])

<a
    class="link"
    href="{{ $href }}"
    title="{{ $title }}"
    data-appearance="{{ $appearance }}"
>
    {{ $slot }}
</a>
