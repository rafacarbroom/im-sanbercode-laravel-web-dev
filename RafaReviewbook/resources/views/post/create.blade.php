<h2>Tambah Data</h2>
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div>
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>