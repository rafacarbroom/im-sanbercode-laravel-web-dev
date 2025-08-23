@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Daftar Genre</h2>
    <a href="{{ route('genres.create') }}" class="btn btn-primary mb-3">Tambah Genre</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        @foreach($genres as $genre)
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->name }}</td>
            <td>{{ $genre->description }}</td>
            <td>
                <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection