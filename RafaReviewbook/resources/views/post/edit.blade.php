<h2>Edit Post</h2>
<form action="{{ route('post.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
    </div>
    <div>
        <label>Body</label>
        <textarea name="body" class="form-control">{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>