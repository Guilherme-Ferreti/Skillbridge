<x-app-layout page="benefits">
    <x-slot:title>{{ __('Benefits') }}</x-slot>
    <x-slot:description>
        {{ __('Skillbridge offers a range of benefits to help you achieve your goals, including flexible pricing, expert instructors, and a wide range of courses.') }}
    </x-slot>

    <x-page.content-header
        :title="__('Benefits')"
        :description="__('Skillbridge offers a range of benefits to help you achieve your goals, including flexible pricing, expert instructors, and a wide range of courses.')"
    />

    @include('layouts.benefits.benefits-list')

    <x-page.section>
        @include('layouts.join-us-ad')
    </x-page.section>
</x-app-layout>
