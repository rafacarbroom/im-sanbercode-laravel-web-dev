<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Users - One to One</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h2>One to One: User - Profile</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Name (profile)</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->profile->name ?? '-' }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>