<a
    {{ $attributes }}
    @if (url()->current() === $attributes->get("href"))
        aria-current="page"
    @endif
>
    {{ $slot }}
</a>
