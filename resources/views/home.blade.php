<x-layouts.app>
    <x-slot:title>Power Your Potential</x-slot>

    <div class="hero">
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
        <p>Learn from Industry Experts and Enhance Your Skills.</p>

        <div>
            <x-link
                :href="route('home')"
                appearance="button"
                title="Explore Courses"
            >
                Explore Courses
            </x-link>
            <x-link
                :href="route('home')"
                appearance="button"
                title="View Pricing"
            >
                View Pricing
            </x-link>
        </div>
    </div>
</x-layouts.app>
