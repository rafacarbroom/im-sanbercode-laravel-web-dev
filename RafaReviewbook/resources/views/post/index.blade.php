<a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $key => $post)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No data</td></tr>
        @endforelse
    </tbody>
</table>