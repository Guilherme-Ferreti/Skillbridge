<x-app-layout page="contact-us">
    <x-slot:title>{{ __('Contact Us') }}</x-slot>
    <x-slot:description>
        {{ __('Get in touch with Skillbridge! Whether you have a question or need support, our team is ready to help you on your design and development career path.') }}
    </x-slot>

    <x-page.content-header
        :title="__('Contact Us')"
        :description="__('Get in touch with Skillbridge! Whether you have a question or need support, our team is ready to help you on your design and development career path.')"
    />

    @include('layouts.contact-us.form')
</x-app-layout>
