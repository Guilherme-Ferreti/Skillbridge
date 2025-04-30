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
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Home"
            >
                Home
            </x-link>
        </li>
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Courses"
            >
                Courses
            </x-link>
        </li>
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="About Us"
            >
                About Us
            </x-link>
        </li>
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Pricing"
            >
                Pricing
            </x-link>
        </li>
        <li class="navbar__link">
            <x-link
                :href="route('home')"
                title="Contact"
            >
                Contact
            </x-link>
        </li>
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
                appearance="button"
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
