@props([
    'title',
    'introductoryText',
])

<div class="section-header">
    <h2>{{ $title }}</h2>

    <div class="section-header__content">
        <p>
            {{ $introductoryText }}
        </p>
        @if ($slot->isNotEmpty())
            <div class="section-header__side-content">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
