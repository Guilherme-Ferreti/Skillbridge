@props([
    'element' => 'div',
])

<{{ $element }} {{ $attributes->merge(['class' => 'card']) }}>
    <div {{ $heading->attributes->class(['card__heading']) }}>
        {{ $heading }}
    </div>
    <div class="card__body">
        {{ $slot }}
    </div>
    <div {{ $footer->attributes->class(['card__footer']) }}>
        {{ $footer }}
    </div>
</{{ $element }}>
