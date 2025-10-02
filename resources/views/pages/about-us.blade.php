<x-app-layout page="about-us">
    <x-slot:title>{{ __('About Us') }}</x-slot>
    <x-slot:description>
        {{ __('Behind Skillbridge is a team committed to helping you unlock your creative potential. Learn our story, goals, and how we empower creators worldwide.') }}
    </x-slot>

    <x-page.content-header
        :title="__('About Skillbridge')"
        :description="__('Welcome to our platform, where we are passionate about empowering individuals to master the world of design and development. We offer a wide range of online courses designed to equip learners with the skills and knowledge needed to succeed in the ever-evolving digital landscape.')"
    />

    @include('layouts.about-us.achievements')
    @include('layouts.about-us.our-goals')
    @include('layouts.join-us-ad')
</x-app-layout>
