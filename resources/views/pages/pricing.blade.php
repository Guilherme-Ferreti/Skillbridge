<x-app-layout page="pricing">
    <x-slot:title>{{ __('Our Pricing') }}</x-slot>
    <x-slot:description>
        {{ __('Find the perfect plan to unlock your potential at Skillbridge. Our transparent pricing makes it easy to choose the right path for your design and development career.') }}
    </x-slot>

    <x-page.content-header
        :title="__('Our Pricing')"
        :description="__('Welcome to Skillbridge\'s Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you\'re an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.')"
    />

    <x-page.section class="pricing__plans-section">
        <div id="plans__duration-toggle"></div>
        @include('layouts.plans')
    </x-page.section>

    <x-page.section aria-labelledby="faq__heading">
        @include('layouts.faq')
    </x-page.section>
</x-app-layout>
