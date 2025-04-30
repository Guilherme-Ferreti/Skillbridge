<nav class="navbar">
    <a
        class="navbar__logo"
        href="{{ route('home') }}"
    >
        <x-icons.app-logo />
    </a>

    <ul class="navbar__links">
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

    <x-button class="navbar__drawer-toggle">
        <x-icons.bars-3-bottom-right />
    </x-button>
</nav>
