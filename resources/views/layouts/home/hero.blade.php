<x-page.section
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
                <span>{{ __('Unlock') }}</span>
                {{ __('Your Creative Potential') }}
            </span>
        </div>
        <span class="hero__second-line-title">{{ __('with Online Design and Development Courses') }}</span>
    </h1>

    <p class="hero__text">{{ __('Learn from Industry Experts and Enhance Your Skills.') }}</p>

    <div class="hero__buttons-wrapper">
        <x-button
            :name="__('Explore Courses')"
            color="primary"
            :to="lroute('courses')"
        />
        <x-button
            :name="__('View Pricing')"
            color="secondary"
            :to="lroute('pricing')"
        />
    </div>
</x-page.section>
