<label for="txtTitle">Title</label>
<input type="text" name="title" placeholder="Add Post Title" value="{{ old('title', $post->title) }}">
@error('title')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror
<br>
<label for="txtBody">Body</label>
<textarea type="text" name="body" placeholder="Write Post body">{{ old('body', $post->body) }}</textarea>
@error('body')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror
