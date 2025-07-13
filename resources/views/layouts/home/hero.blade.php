<section
    class="hero"
    aria-labelledby="hero__heading"
>
    <h1
        class="hero__heading"
        id="hero__heading"
    >
        <div class="hero__first-line-title-wrapper">
            <x-icons.abstract-line
                class="hero__abstract-line"
                role="presentation"
            />
            <div class="hero__icon-wrapper"><x-icons.bolt role="presentation" /></div>
            <span class="hero__first-line-title">
                <span>Unlock</span>
                Your Creative Potential
            </span>
        </div>
        <span class="hero__second-line-title">with Online Design and Development Courses</span>
    </h1>

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
