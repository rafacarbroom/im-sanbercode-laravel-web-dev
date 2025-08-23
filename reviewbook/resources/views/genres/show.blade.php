@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Detail Genre</h2>
    <p><strong>ID:</strong> {{ $genre->id }}</p>
    <p><strong>Nama:</strong> {{ $genre->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $genre->description }}</p>
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection