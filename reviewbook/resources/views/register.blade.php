<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
</head>
<body>
    <h1>Form Register</h1>

    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <div style="margin-bottom:10px;">
            <label>First Name:</label><br>
            <input type="text" name="first_name" required>
        </div>

        <div style="margin-bottom:10px;">
            <label>Last Name:</label><br>
            <input type="text" name="last_name" required>
        </div>

        {{-- field tambahan opsional sesuai tugas HTML awalmu --}}
        <div style="margin-bottom:10px;">
            <label>Gender:</label><br>
            <label><input type="radio" name="gender" value="Male"> Male</label><br>
            <label><input type="radio" name="gender" value="Female"> Female</label><br>
            <label><input type="radio" name="gender" value="Other"> Other</label>
        </div>

        <div style="margin-bottom:10px;">
            <label>Nationality:</label><br>
            <select name="nationality">
                <option>Indonesian</option>
                <option>Singaporean</option>
                <option>Malaysian</option>
            </select>
        </div>

        <div style="margin-bottom:10px;">
            <label>Language Spoken:</label><br>
            <label><input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia</label><br>
            <label><input type="checkbox" name="language[]" value="English"> English</label><br>
            <label><input type="checkbox" name="language[]" value="Other"> Other</label>
        </div>

        <div style="margin-bottom:10px;">
            <label>Bio:</label><br>
            <textarea name="bio" rows="4" cols="40"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>

    <p style="margin-top:16px;"><a href="{{ route('home') }}">← Kembali ke Home</a></p>
</body>
</html>