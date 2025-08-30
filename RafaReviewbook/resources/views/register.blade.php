@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">REGISTER</h2>
    <form action="/welcome" method="GET" class="mt-4">

        <div class="mb-3">
            <label>First name:</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Last name:</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male"> Male <br>
            <input type="radio" name="gender" value="Female"> Female <br>
            <input type="radio" name="gender" value="Other"> Other
        </div>

        <div class="mb-3">
            <label>Nationality:</label>
            <select name="nationality" class="form-control">
                <option>Indonesian</option>
                <option>Singapore</option>
                <option>Malaysia</option>
                <option>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Language Spoken:</label><br>
            <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
            <input type="checkbox" name="language[]" value="English"> English <br>
            <input type="checkbox" name="language[]" value="Other"> Other
        </div>

        <div class="mb-3">
            <label>Bio:</label>
            <textarea name="bio" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
@endsection