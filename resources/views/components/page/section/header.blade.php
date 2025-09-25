@props([
    'title',
    'introductoryText',
    'sideContentCentered' => false,
])

<div class="page-section-header">
    <h2 {{ $attributes->only('id') }}>{{ $title }}</h2>

    <div class="page-section-header__content">
        <p>
            {{ $introductoryText }}
        </p>
        @if ($slot->isNotEmpty())
            <div
                @class([
                    'page-section-header__side-content',
                    'page-section-header__side-content--centered' => $sideContentCentered,
                ])
            >
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
