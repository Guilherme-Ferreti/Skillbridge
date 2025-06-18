@php
    $footerLinkSection = [
        [
            'name' => 'Home',
            'links' => [
                [
                    'name' =>
                        'Benefits',
                    'route' => route(
                        'home',
                    ),
                ],
                [
                    'name' =>
                        'Our Courses',
                    'route' => route(
                        'courses',
                    ),
                ],
                [
                    'name' =>
                        'Our Testimonials',
                    'route' => route(
                        'home',
                    ),
                ],
                [
                    'name' =>
                        'Our FAQ',
                    'route' => route(
                        'home',
                    ),
                ],
            ],
        ],
        [
            'name' => 'About Us',
            'links' => [
                [
                    'name' =>
                        'Company',
                    'route' => route(
                        'home',
                    ),
                ],
                [
                    'name' =>
                        'Achievements',
                    'route' => route(
                        'home',
                    ),
                ],
                [
                    'name' =>
                        'Our Goals',
                    'route' => route(
                        'home',
                    ),
                ],
            ],
        ],
    ];
@endphp

<footer class="footer | container">
    <div class="footer__content">
        <div class="footer__contact-wrapper">
            <div class="footer__app-logo"><x-icons.app-logo /></div>
            <ul class="footer__contact">
                <li class="footer__contact-item">
                    <x-icons.mail />
                    <a href="mailto:hello@skillbridge.com">hello@skillbridge.com</a>
                </li>
                <li class="footer__contact-item">
                    <x-icons.phone />
                    <a href="tel:+91 91813 23 2309">+91 91813 23 2309</a>
                </li>
                <li class="footer__contact-item">
                    <x-icons.map-pin />
                    <a
                        href="https://maps.app.goo.gl/euWuHEXQqwT9q6RAA"
                        target="_blank"
                    >
                        Somewhere in the World
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer__links">
            @foreach ($footerLinkSection as $section)
                <div class="footer__link-list-wrapper">
                    <h3>{{ $section['name'] }}</h3>
                    <ul class="footer__link-list">
                        @foreach ($section['links'] as $link)
                            <li class="footer__link-list-item">
                                <a
                                    href="{{ $link['route'] }}"
                                    title="{{ $link['route'] }}"
                                >
                                    {{ $link['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="footer__link-list-wrapper">
                <h3>Social Profiles</h3>

                <ul class="footer__social-list">
                    <li>
                        <x-icon-button
                            icon="facebook-logo"
                            title="Facebook"
                            target="_blank"
                            to="https://www.facebook.com/"
                        />
                    </li>
                    <li>
                        <x-icon-button
                            icon="x-logo"
                            title="X"
                            target="_blank"
                            to="https://x.com/"
                        />
                    </li>
                    <li>
                        <x-icon-button
                            icon="linkedin-logo"
                            title="LinkedIn"
                            target="_blank"
                            to="https://linkedin.com/"
                        />
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <p>&copy; {{ now()->year }} Skillbridge. All rights reserved.</p>
    </div>
</footer>
