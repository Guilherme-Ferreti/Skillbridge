@props([
    'action' => '',
    'method' => 'POST',
])

<form
    action="{{ $action }}"
    method="{{ $method }}"
    {{ $attributes->merge(['class' => 'form']) }}
>
    {{ $slot }}
</form>
