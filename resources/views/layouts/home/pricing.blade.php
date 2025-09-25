<x-page.section
    class="home-pricing"
    aria-labelledby="home-pricing__heading"
>
    <x-page.section.header
        id="home-pricing__heading"
        :title="__('Our Pricing')"
        :introductoryText="__('You\'re ready to learn, and we\'re ready to help! We offer flexible pricing to fit your goals, whether you\'re looking for a quick refresh or a deep dive into new skills.')"
        sideContentCentered="true"
    >
        <div id="plans__duration-toggle"></div>
    </x-page.section.header>

    @include('layouts.plans')
</x-page.section>
