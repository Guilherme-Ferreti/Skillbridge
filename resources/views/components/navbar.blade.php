<nav class="navbar">
    <ul class="navbar__links">
        <li class="navbar__logo">
            <a href="{{ route('home') }}">
                <x-icons.app-logo />
            </a>
        </li>
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
</nav>
