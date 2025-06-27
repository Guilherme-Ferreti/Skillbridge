@php
    $routes = [
        [
            'name' => 'Home',
            'alias' => 'home',
        ],
        [
            'name' => 'Courses',
            'alias' => 'courses',
        ],
        [
            'name' => 'About Us',
            'alias' => 'about-us',
        ],
        [
            'name' => 'Pricing',
            'alias' => 'pricing',
        ],
        [
            'name' => 'Contact',
            'alias' => 'contact',
        ],
    ];
@endphp

<div
    class="mobile-nav__wrapper"
    x-data="{
        open: false,
        toggle() {
            if (this.open) {
                this.open = false
                $refs.openButton.setAttribute('aria-expanded', 'false')
                $refs.openButton.focus()
                $refs.drawer.setAttribute('inert', '')
            } else {
                this.open = true
                $refs.openButton.setAttribute('aria-expanded', 'true')
                $refs.drawer.removeAttribute('inert')
                $refs.closeButton.focus()
            }
        },
    }"
>
    <nav
        class="mobile-nav"
        :class="open && 'mobile-nav--open'"
    >
        <ul class="mobile-nav__links">
            <li class="mobile-nav__logo">
                <x-link href="{{ route('home') }}">
                    <x-icons.app-logo />
                </x-link>
            </li>
            <li>
                <x-link
                    @class(['mobile-nav__link', 'mobile-nav__link--active' => \Route::is('sign-up')])
                    href="{{ route('sign-up') }}"
                >
                    Sign Up
                </x-link>
            </li>
            <li>
                <x-button
                    :to="route('home')"
                    name="Login"
                    color="primary"
                />
            </li>
            <li>
                <button
                    class="mobile-nav__open-button"
                    @click="toggle"
                    aria-label="open sidebar"
                    aria-expanded="false"
                    aria-controls="sidebar"
                    x-ref="openButton"
                >
                    <x-icons.bars-3-bottom-right />
                </button>
            </li>
        </ul>
        <ul
            class="mobile-nav__drawer"
            id="sidebar"
            x-ref="drawer"
            inert
            @keyup.escape="toggle"
        >
            <div class="mobile-nav__drawer-head">
                <li class="mobile-nav__logo">
                    <x-link href="{{ route('home') }}">
                        <x-icons.app-logo />
                    </x-link>
                </li>
                <li>
                    <button
                        class="mobile-nav__close-button"
                        @click="toggle"
                        aria-label="close sidebar"
                        x-ref="closeButton"
                    >
                        <x-icons.x-mark />
                    </button>
                </li>
            </div>
            @foreach ($routes as $route)
                <li class="mobile-nav__drawer-link">
                    <x-link href="{{ route($route['alias']) }}">{{ $route['name'] }}</x-link>
                </li>
            @endforeach
        </ul>
    </nav>

    <div
        id="overlay"
        aria-hidden="true"
        @click="toggle"
    ></div>
</div>

<nav class="desktop-nav">
    <ul class="desktop-nav__links">
        <li class="desktop-nav__logo">
            <x-icons.app-logo />
        </li>
        @foreach ($routes as $route)
            <li @class(['desktop-nav__link', 'desktop-nav__link--active' => \Route::is($route['alias'])])>
                <x-link href="{{ route($route['alias']) }}">
                    {{ $route['name'] }}
                </x-link>
            </li>
        @endforeach

        <li @class(['desktop-nav__link', 'desktop-nav__link--active' => \Route::is('sign-up')])>
            <x-link href="{{ route('sign-up') }}">Sign Up</x-link>
        </li>
        <li>
            <x-button
                :to="route('home')"
                name="Login"
                color="primary"
            />
        </li>
    </ul>
</nav>
