@props([
    'title',
    'introductoryText',
    'sideContentCentered' => false,
])

<div class="section-header">
    <h2 {{ $attributes->only('id') }}>{{ $title }}</h2>

    <div class="section-header__content">
        <p>
            {{ $introductoryText }}
        </p>
        @if ($slot->isNotEmpty())
            <div
                @class([
                    'section-header__side-content',
                    'section-header__side-content--centered' => $sideContentCentered,
                ])
            >
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
