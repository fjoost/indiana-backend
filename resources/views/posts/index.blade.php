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
        <div style="display: flex; align-items:baseline">
            <h2>
                <a href="blog/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}"> Edit</a> &nbsp;
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</x-layouts.app>
