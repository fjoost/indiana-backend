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
        <label for="txtTitle">Title</label>
        <input type="text" name="title" placeholder="Add Post Title" value="{{ old('title') }}">
        @error('title')
            <br>
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br>
        <label for="txtBody">Body</label>
        <textarea type="text" name="body" placeholder="Write Post body" value="{{ old('body') }}"></textarea>
        @error('body')
            <br>
            <small style="color:red">{{ $message }}</small>
        @enderror
        <button type="submit">Save </button>
        <br>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
