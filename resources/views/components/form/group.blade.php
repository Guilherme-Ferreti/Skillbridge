@props([
    'spanFull',
])

<div
    {{ $attributes->class(['form-group', 'span-full' => isset($spanFull)]) }}
>
    {{ $slot }}
</div>
