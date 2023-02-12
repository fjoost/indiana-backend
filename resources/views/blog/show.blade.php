<x-layouts.app>
    <x-slot name="title">
        Blog
    </x-slot>
    <x-slot name="metaDescription">
        Blog meta description
    </x-slot>
    <h1>Blog {{ $post->id }} {{ $post->title }} </h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('blog.index') }}">Regresar</a>
</x-layouts.app>
