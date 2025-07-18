<x-app-layout page="home">
    <x-slot:title>{{ __('Power Your Potential') }}</x-slot>

    @include('layouts.home.hero')
    @include('layouts.home.partners')
    @include('layouts.home.video')
    @include('layouts.home.benefits')
    @include('layouts.home.courses')
    @include('layouts.home.testimonials')
    @include('layouts.home.pricing')
    @include('layouts.home.faq')
</x-app-layout>
