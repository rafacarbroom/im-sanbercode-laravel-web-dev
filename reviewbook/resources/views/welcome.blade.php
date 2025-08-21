@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">WELCOME</h2>
    <p class="text-center">
        Selamat datang <strong>{{ $firstname }} {{ $lastname }}</strong> <br>
        Terima kasih sudah bergabung di SanberBook!
    </p>
</div>
@endsection