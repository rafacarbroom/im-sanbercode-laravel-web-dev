@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Edit Game</h2>

    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Game</label>
            <input type="text" name="nama" class="form-control" value="{{ $game->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ $game->genre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection