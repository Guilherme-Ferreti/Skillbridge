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
            <div class="footer__app-logo">
                <x-app-logo role="presentation" />
            </div>
            <ul
                class="footer__contact"
                aria-label="{{ __('Our contact information') }}"
            >
                <li class="footer__contact-item">
                    <x-icons.mail role="presentation" />
                    <x-basic-link
                        to="mailto:hello@skillbridge.com"
                        target="_blank"
                        rel="external"
                        name="hello@skillbridge.com"
                    />
                </li>
                <li class="footer__contact-item">
                    <x-icons.phone role="presentation" />
                    <x-basic-link
                        to="tel:+91 91813 23 2309"
                        name="+91 91813 23 2309"
                    />
                </li>
                <li class="footer__contact-item">
                    <x-icons.map-pin role="presentation" />
                    <x-basic-link
                        to="https://maps.app.goo.gl/euWuHEXQqwT9q6RAA"
                        target="_blank"
                        rel="external"
                        name="Somewhere in the World"
                    />
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
                                <x-basic-link
                                    :to="$link['route']"
                                    :name="$link['name']"
                                />
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="footer__link-list-wrapper">
                <h3>{{ __('Social Profiles') }}</h3>

                <ul class="footer__social-list">
                    <li>
                        <x-icon-button
                            icon="facebook-logo"
                            aria-label="{{ __('Connect on our Facebook page') }}"
                            target="_blank"
                            to="https://www.facebook.com/"
                            rel="external"
                        />
                    </li>
                    <li>
                        <x-icon-button
                            icon="x-logo"
                            aria-label="{{ __('Connect on our X page') }}"
                            target="_blank"
                            to="https://x.com/"
                            rel="external"
                        />
                    </li>
                    <li>
                        <x-icon-button
                            icon="linkedin-logo"
                            aria-label="{{ __('Connect on our LinkedIn page') }}"
                            target="_blank"
                            to="https://linkedin.com/"
                            rel="external"
                        />
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__language-selector">
        <x-language-selector />
    </div>
    <div class="footer__copyright">
        <p>&copy; {{ now()->year }} Skillbridge. {{ __('All rights reserved') }}.</p>
    </div>
</footer>
