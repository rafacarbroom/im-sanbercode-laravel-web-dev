<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Game</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h2>List Game</h2>
<a href="{{ route('game.create') }}" class="btn btn-primary mb-3">Tambah Game</a>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

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
    @foreach($games as $g)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $g->name }}</td>
      <td>{{ $g->gameplay }}</td>
      <td>{{ $g->developer }}</td>
      <td>{{ $g->year }}</td>
      <td>
        <a href="{{ route('game.show',$g->id) }}" class="btn btn-info btn-sm">Detail</a>
        <a href="{{ route('game.edit',$g->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('game.destroy',$g->id) }}" method="POST" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>