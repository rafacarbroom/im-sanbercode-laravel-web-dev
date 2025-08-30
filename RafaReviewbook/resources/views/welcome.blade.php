@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>📚 Selamat Datang di Library App</h1>
    <p>Aplikasi sederhana untuk tugas final project.</p>
    <a href="{{ url('books') }}" class="btn btn-primary mt-3">Lihat Buku</a>
</div>
@endsection