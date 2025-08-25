@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Tambah Game Baru</h2>

    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Game</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection