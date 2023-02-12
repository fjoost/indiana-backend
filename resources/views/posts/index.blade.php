<x-layouts.app>
    <x-slot name="title">
        Blog
    </x-slot>
    <x-slot name="metaDescription">
        Blog meta description
    </x-slot>
    <h1>Blog content</h1>
    <a href="{{ route('posts.create') }}">Create new Post</a>
    <hr>
    @foreach ($posts as $post)
        </h2>
        <a href="blog/{{ $post->id }}">
            {{ $post->title }}
        </a>
        <h2>
    @endforeach
</x-layouts.app>
