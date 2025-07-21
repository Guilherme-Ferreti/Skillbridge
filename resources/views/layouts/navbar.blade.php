@php
    $routes = [
        [
            'name' => __('Home'),
            'alias' => 'home',
        ],
        [
            'name' => __('Courses'),
            'alias' => 'courses',
        ],
        [
            'name' => __('About Us'),
            'alias' => 'about-us',
        ],
        [
            'name' => __('Pricing'),
            'alias' => 'pricing',
        ],
        [
            'name' => __('Contact'),
            'alias' => 'contact',
        ],
    ];
@endphp

<div
    class="mobile-nav__wrapper"
    x-data="{
        open: false,
        focusTrap: focusTrap.createFocusTrap($refs.drawer, {
            escapeDeactivates: false,
            allowOutsideClick: true,
        }),
        toggle() {
            if (this.open) {
                this.open = false
                this.focusTrap.deactivate()
                $refs.openButton.setAttribute('aria-expanded', 'false')
                $refs.drawer.setAttribute('inert', '')
            } else {
                this.open = true
                $refs.openButton.setAttribute('aria-expanded', 'true')
                $refs.drawer.removeAttribute('inert')
                this.focusTrap.activate()
            }
        },
    }"
>
    <nav
        class="mobile-nav"
        :class="open && 'mobile-nav--open'"
        aria-label="{{ __('Main navigation') }}"
    >
        <ul class="mobile-nav__links">
            <li class="mobile-nav__logo">
                <x-link
                    href="{{ lroute('home') }}"
                    aria-label="{{ __('Home') }}"
                >
                    <x-app-logo />
                </x-link>
            </li>
            <li>
                <x-link
                    @class(['mobile-nav__link', 'mobile-nav__link--active' => Route::is('sign-up')])
                    href="{{ lroute('sign-up') }}"
                >
                    {{ __('Sign Up') }}
                </x-link>
            </li>
            <li>
                <x-button
                    :to="lroute('home')"
                    name="{{ __('Login') }}"
                    color="primary"
                />
            </li>
            <li>
                <button
                    class="mobile-nav__open-button"
                    @click="toggle"
                    aria-label="{{ __('Open sidebar') }}"
                    aria-expanded="false"
                    aria-controls="mobile-nav__drawer"
                    x-ref="openButton"
                >
                    <x-icons.bars-3-bottom-right />
                </button>
            </li>
        </ul>
        <div
            class="mobile-nav__drawer"
            id="mobile-nav__drawer"
            x-ref="drawer"
            inert
            @keyup.escape="toggle"
        >
            <div class="mobile-nav__drawer-head">
                <x-app-logo role="presentation" />
                <button
                    class="mobile-nav__close-button"
                    @click="toggle"
                    aria-label="{{ __('Close sidebar') }}"
                    x-ref="closeButton"
                >
                    <x-icons.x-mark />
                </button>
            </div>
            <ul>
                @foreach ($routes as $route)
                    <li class="mobile-nav__drawer-link">
                        <x-link href="{{ lroute($route['alias']) }}">{{ $route['name'] }}</x-link>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>

    <div
        id="overlay"
        aria-hidden="true"
        @click="toggle"
    ></div>
</div>

<nav
    class="desktop-nav"
    aria-label="{{ __('Main navigation') }}"
>
    <ul class="desktop-nav__links">
        <li
            class="desktop-nav__logo"
            aria-label="{{ __(':company logo', ['company' => config('app.name')]) }}"
        >
            <x-app-logo />
        </li>
        @foreach ($routes as $route)
            <li @class(['desktop-nav__link', 'desktop-nav__link--active' => Route::is($route['alias'])])>
                <x-link href="{{ lroute($route['alias']) }}">
                    {{ $route['name'] }}
                </x-link>
            </li>
        @endforeach

        <li @class(['desktop-nav__link', 'desktop-nav__link--active' => Route::is('sign-up')])>
            <x-link href="{{ lroute('sign-up') }}">{{ __('Sign Up') }}</x-link>
        </li>
        <li>
            <x-button
                :to="lroute('home', ['locale' => 'pt_BR'])"
                name="{{ __('Login') }}"
                color="primary"
            />
        </li>
    </ul>
</nav>
