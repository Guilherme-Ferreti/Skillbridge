@use('App\Enums\Locale')

@php
    $currentRouteName = Str::remove('localized.', Route::currentRouteName());
    $routeParameters = Arr::except(Route::current()->parameters, 'locale');
@endphp

<link
    rel="alternate"
    hreflang="en-us"
    href="{{ route($currentRouteName, $routeParameters) }}"
/>
<link
    rel="alternate"
    hreflang="pt-br"
    href="{{ localizedRoute($currentRouteName, [...$routeParameters, 'locale' => Locale::BRAZILIAN_PORTUGUESE->value]) }}"
/>
<link
    rel="alternate"
    hreflang="x-default"
    href="{{ route($currentRouteName, $routeParameters) }}"
/>
