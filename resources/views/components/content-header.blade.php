@props([
    'title',
    'description',
])
<section
    class="content-header"
    aria-labelledby="content-header__title"
>
    <h1 id="content-header__title">{{ $title }}</h1>
    <p>{{ $description }}</p>
</section>
