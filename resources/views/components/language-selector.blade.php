@use('App\Enums\Locale')

@php
    $currentRouteName = Str::remove('localized.', Route::currentRouteName());
@endphp

<ul
    class="language-selector"
    aria-label="{{ __('Select your preferred language') }}"
>
    <li>
        <x-link
            class="basic-link"
            lang="en-us"
            href="{{ route($currentRouteName) }}"
        >
            English (US)
        </x-link>
    </li>
    <li>
        <x-link
            class="basic-link"
            lang="pt-br"
            href="{{ localizedRoute($currentRouteName, ['locale' => Locale::BRAZILIAN_PORTUGUESE->value]) }}"
        >
            Português (Brasil)
        </x-link>
    </li>
</ul>
