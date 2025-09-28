@php
    $partners = ['zapier', 'spotify', 'zoom', 'amazon', 'adobe', 'notion', 'netflix', 'new-york-times'];
@endphp

<x-page.section
    class="partners-list"
    aria-label="{{ __('Our partners') }}"
>
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($partners as $partner)
                <div class="partners-list__logo | swiper-slide">
                    <img
                        src="{{ Vite::asset("resources/images/logos/$partner.svg") }}"
                        alt="{{ __(':company logo', ['company' => Str::of($partner)->replace('-', ' ')->title(),]) }}"
                        role="img"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-page.section>

@pushOnce('scripts')
<script>
    new Swiper('.partners-list .swiper', {
        slidesPerView: 2,
        freeMode: true,
        loop: true,
        speed: 4500,
        allowTouchMove: false,
        autoplay: {
            delay: 0,
        },
        breakpoints: {
            475: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
                speed: 6500,
            },
            1024: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: {{ count($partners) - 1 }},
            },
        },
    });
</script>
@endPushOnce
