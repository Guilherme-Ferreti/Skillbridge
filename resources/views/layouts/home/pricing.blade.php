<section
    class="home-pricing"
    aria-labelledby="home-pricing__heading"
>
    <x-section-header
        id="home-pricing__heading"
        title="Our pricing"
        introductoryText="You're ready to learn, and we're ready to help! We offer flexible pricing to fit your goals, whether you're looking for a quick refresh or a deep dive into new skills."
        sideContentCentered="true"
    >
        <div id="plan-duration-toggle"></div>
    </x-section-header>

    @include('layouts.plans')
</section>
