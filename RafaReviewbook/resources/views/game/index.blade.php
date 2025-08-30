<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Table Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>List Game</h2>

    <a href="{{ route('games.create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gameplay</th>
                <th>Developer</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($games as $index => $game)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $game->name }}</td>
                <td>{{ $game->gameplay }}</td>
                <td>{{ $game->developer }}</td>
                <td>{{ $game->year }}</td>
                <td>
                    <a href="{{ route('game.show', $game->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('game.edit', $game->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('game.destroy', $game->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Data belum tersedia</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>