@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Detail Game</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $game->id }}</li>
        <li class="list-group-item"><strong>Nama:</strong> {{ $game->nama }}</li>
        <li class="list-group-item"><strong>Genre:</strong> {{ $game->genre }}</li>
    </ul>
    <a href="{{ route('games.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection