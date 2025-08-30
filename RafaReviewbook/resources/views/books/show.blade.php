@extends('layouts.app')

@section('content')
<h2>{{ $book->title }}</h2>
<p><strong>Genre:</strong> {{ $book->genre->name }}</p>
<p>{{ $book->description }}</p>

@if($book->image)
    <img src="{{ asset('storage/'.$book->image) }}" width="200" class="mb-3">
@endif

{{-- Comment Section --}}
<h4>Komentar</h4>
@auth
<form method="POST" action="{{ url('books/'.$book->id.'/comments') }}">
    @csrf
    <textarea name="comment" class="form-control mb-2" placeholder="Tulis komentar"></textarea>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endauth

@foreach($book->comments as $c)
<div class="border rounded p-2 my-2">
    <strong>{{ $c->user->name }}</strong><br>
    {{ $c->comment }}
</div>
@endforeach
@endsection