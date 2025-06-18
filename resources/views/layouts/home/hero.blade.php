<section class="hero">
    <div class="hero__header">
        <x-icons.abstract-line class="hero__header-abstract-line" />
        <div class="hero__header-icon-wrapper">
            <x-icons.bolt />
        </div>
        <h1 class="hero__header-title">
            <span>Unlock</span>
            Your Creative Potential
        </h1>
    </div>

    <h2 class="hero__title">with Online Design and Development Courses.</h2>
    <p class="hero__text">Learn from Industry Experts and Enhance Your Skills.</p>

    <div class="hero__buttons-wrapper">
        <x-button
            name="Explore Courses"
            color="primary"
            :to="route('courses')"
        />
        <x-button
            name="View Pricing"
            color="secondary"
            :to="route('pricing')"
        />
    </div>
</section>
