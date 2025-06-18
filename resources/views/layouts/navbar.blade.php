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
        <button
            class="navbar__close-drawer"
            type="button"
            @click="drawerOpen = false"
        >
            <x-icons.x-mark />
        </button>
        @foreach ($routes as $route)
            <li
                class="navbar__link"
                @if (Route::is($route['alias'])) data-active @endif
            >
                <x-basic-link
                    :to="route($route['alias'])"
                    :name="$route['name']"
                />
            </li>
        @endforeach
    </ul>

    <ul class="navbar__actions">
        <li class="navbar__link">
            <x-basic-link
                :to="route('home')"
                name="Sign Up"
            />
        </li>
        <li class="navbar__link">
            <x-button
                :to="route('home')"
                color="primary"
                name="Login"
            />
        </li>
    </ul>

    <button
        class="navbar__open-drawer"
        type="button"
        @click="drawerOpen = true"
    >
        <x-icons.bars-3-bottom-right />
    </button>
</nav>
