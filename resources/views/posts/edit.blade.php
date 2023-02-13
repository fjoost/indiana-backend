<x-layouts.app>
    <x-slot name="title">
        Blog
    </x-slot>
    <x-slot name="metaDescription">
        Blog meta description
    </x-slot>
    <h1> Edit Form of - Blog {{ $post->id }} {{ $post->title }}</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf @method('PATCH')
        @include('posts.form-fields')

        <button type="submit">Save </button>
        <br>
    </form>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
