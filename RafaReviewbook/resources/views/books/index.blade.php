@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Buku</h2>
    @auth
        @if(Auth::user()->role === 'admin')
            <a href="{{ route('books.create') }}" class="btn btn-success">+ Tambah Buku</a>
        @endif
    @endauth
</div>

<div class="row">
    @foreach($books as $book)
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            @if($book->image)
                <img src="{{ asset('storage/'.$book->image) }}" class="card-img-top" alt="Book">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">Genre: {{ $book->genre->name }}</p>
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection