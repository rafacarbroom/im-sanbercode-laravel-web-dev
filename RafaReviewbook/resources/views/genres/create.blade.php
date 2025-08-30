@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Tambah Genre Baru</h2>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Genre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection