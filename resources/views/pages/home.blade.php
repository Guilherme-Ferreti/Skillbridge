<x-app-layout page="home">
    <x-slot:title>{{ __('Power Your Potential') }}</x-slot>
    <x-slot:description>
        {{ __('Skillbridge is a platform that helps you unlock your creative potential by offering a wide range of online design and development courses.') }}
    </x-slot>

    @include('layouts.home.hero')
    @include('layouts.home.partners')
    @include('layouts.home.video')
    @include('layouts.home.benefits')
    @include('layouts.home.courses')
    @include('layouts.home.testimonials')
    @include('layouts.home.pricing')
    @include('layouts.home.faq')
    @include('layouts.join-us-ad')
</x-app-layout>
