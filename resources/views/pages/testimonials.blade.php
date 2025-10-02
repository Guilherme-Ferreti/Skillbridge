<x-app-layout page="testimonials">
    <x-slot:title>{{ __('Testimonials') }}</x-slot>
    <x-slot:description>
        {{ __('What our customers say about Skillbridge. Here are some of their experiences and success stories from taking our courses and working with our instructors.') }}
    </x-slot>

    <x-page.content-header
        :title="__('Testimonials')"
        :description="__('What our customers say about Skillbridge. Here are some of their experiences and success stories from taking our courses and working with our instructors.')"
    />

    @include('layouts.testimonials.testimonials-list')
    @include('layouts.join-us-ad')
</x-app-layout>
