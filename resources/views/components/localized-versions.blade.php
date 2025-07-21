@use('App\Enums\Locale')

@php
    $currentRouteName = Str::remove('localized.', Route::currentRouteName());
@endphp

<link
    rel="alternate"
    hreflang="en-us"
    href="{{ route($currentRouteName) }}"
/>
<link
    rel="alternate"
    hreflang="pt-br"
    href="{{ localizedRoute($currentRouteName, ['locale' => Locale::BRAZILIAN_PORTUGUESE->value]) }}"
/>
<link
    rel="alternate"
    hreflang="x-default"
    href="{{ route($currentRouteName) }}"
/>
