@props([
    'title',
    'description',
])
<x-page.section
    class="page-content-header"
    aria-labelledby="page-content-header__title"
>
    <h1 id="page-content-header__title">{{ $title }}</h1>
    <p>{{ $description }}</p>
</x-page.section>
