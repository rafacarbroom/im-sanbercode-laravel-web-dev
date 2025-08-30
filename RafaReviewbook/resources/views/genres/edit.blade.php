@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Edit Genre</h2>
    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Genre</label>
            <input type="text" name="name" class="form-control" value="{{ $genre->name }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $genre->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection