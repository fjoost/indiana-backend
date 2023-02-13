<x-layouts.app>
    <x-slot name="title">
        Blog
    </x-slot>
    <x-slot name="metaDescription">
        Blog meta description
    </x-slot>
    <h1>Create new Post </h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Save </button>
        <br>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
