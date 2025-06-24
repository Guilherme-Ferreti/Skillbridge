@php
    $partners = ['zapier', 'spotify', 'zoom', 'amazon', 'adobe', 'notion', 'netflix', 'new-york-times'];
@endphp

<section
    class="home-partners"
    aria-label="Our Partners"
>
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($partners as $partner)
                <div class="home-partners__logo | swiper-slide">
                    <img
                        src="{{ asset("images/logos/$partner.svg") }}"
                        alt="{{ Str::of($partner)->replace('-', ' ')->title() . ' logo' }}"
                        role="img"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

@pushOnce('scripts')
<script>
    new Swiper('.home-partners .swiper', {
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
