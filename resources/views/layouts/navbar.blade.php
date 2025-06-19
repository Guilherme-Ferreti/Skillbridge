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
        :class="open && 'open'"
    >
        <ul class="mobile-nav__links">
            <li class="mobile-nav__logo">
                <a href="{{ route('home') }}">
                    <x-icons.app-logo />
                </a>
            </li>
            <li>
                <a
                    @class(['nav__link', 'nav__link--active' => \Route::is('sign-up')])
                    href="{{ route('sign-up') }}"
                >
                    Sign Up
                </a>
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
                    <a href="{{ route('home') }}">
                        <x-icons.app-logo />
                    </a>
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
                    <a href="{{ route($route['alias']) }}">{{ $route['name'] }}</a>
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

<nav class="desktop-nav"></nav>

{{--
    <nav class="nav">
    <ul class="nav__links-wrapper">
    <div class="nav__logo">
    <li>
    <a href="{{ route('home') }}">
    <x-icons.app-logo />
    </a>
    </li>
    </div>
    <div class="nav__main-links">
    @foreach ($routes as $route)
    <li>
    <a
    @class(['nav__link', 'nav__link--active' => \Route::is($route['alias'])])
    href="{{ route($route['alias']) }}"
    >
    {{ $route['name'] }}
    </a>
    </li>
    @endforeach
    </div>
    <div class="nav__side-links">
    <li>
    <a
    @class(['nav__link', 'nav__link--active' => \Route::is('sign-up')])
    href="{{ route('sign-up') }}"
    >
    Sign Up
    </a>
    </li>
    <li>
    <x-button
    :to="route('home')"
    name="Login"
    color="primary"
    />
    </li>
    </div>
    </ul>
    </nav>
--}}
