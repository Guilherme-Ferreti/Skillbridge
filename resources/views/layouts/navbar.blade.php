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

<nav
    class="navbar"
    x-data="{ drawerOpen: false }"
    :data-drawer-open="drawerOpen ? 'true' : 'false'"
>
    <a
        class="navbar__logo"
        href="{{ route('home') }}"
    >
        <x-icons.app-logo />
    </a>

    <ul class="navbar__links">
        <x-button
            class="navbar__close-drawer"
            @click="drawerOpen = false"
        >
            <x-icons.x-mark />
        </x-button>
        @foreach ($routes as $route)
            <li
                class="navbar__link"
                @if (Route::is($route['alias'])) data-active @endif
            >
                <x-link
                    :href="route($route['alias'])"
                    :title="$route['name']"
                >
                    {{ $route['name'] }}
                </x-link>
            </li>
        @endforeach
    </ul>

    <ul class="navbar__actions">
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Sign Up"
            >
                Sign Up
            </x-link>
        </li>
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Login"
                appearance="primary"
            >
                Login
            </x-link>
        </li>
    </ul>

    <x-button
        class="navbar__open-drawer"
        @click="drawerOpen = true"
    >
        <x-icons.bars-3-bottom-right />
    </x-button>
</nav>
