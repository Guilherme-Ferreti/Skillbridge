<nav class="navbar">
    <ul class="navbar__links">
        <li class="navbar__logo">
            <a href="{{ route('home') }}">
                <x-icons.app-logo />
            </a>
        </li>
        <li class="navbar__link">
            <a
                href="{{ route('home') }}"
                title="Home"
            >
                Home
            </a>
        </li>
        <li class="navbar__link">
            <a
                href="#"
                title="Courses"
            >
                Courses
            </a>
        </li>
        <li class="navbar__link">
            <a
                href="#"
                title="About Us"
            >
                About Us
            </a>
        </li>
        <li class="navbar__link">
            <a
                href="#"
                title="Pricing"
            >
                Pricing
            </a>
        </li>
        <li class="navbar__link">
            <a
                href="#"
                title="Contact"
            >
                Contact
            </a>
        </li>
    </ul>

    <div class="navbar__actions">
        <button>Sign Up</button>
        <button>Login</button>
    </div>
</nav>
