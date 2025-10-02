<x-app-layout page="courses-show">
    <x-slot:title>{{ $course->name }}</x-slot>
    <x-slot:description>
        {{ $course->teaser }}
    </x-slot>

    <x-page.content-header
        :title="$course->name"
        :description="$course->teaser"
    />

    @include('layouts.courses.show.course')
</x-app-layout>
