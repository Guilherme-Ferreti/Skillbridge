<x-app-layout page="courses-index">
    <x-slot:title>{{ __('Courses') }}</x-slot>
    <x-slot:description>
        {{ __('Explore all of Skillbridge\'s online courses. Advance your skills with training in design, web development, UX/UI, and more. Start creating today!') }}
    </x-slot>

    <x-page.content-header
        :title="__('Online Courses on Design and Development')"
        :description="__('Welcome to our online course page, where you can enhance your skills in design and development. Choose from our carefully curated selection of :courses_count courses designed to provide you with comprehensive knowledge and practical experience. Explore the courses below and find the perfect fit for your learning journey.', ['courses_count' => $courses->count()])"
    />

    @include('layouts.courses.index.courses-list')
</x-app-layout>
