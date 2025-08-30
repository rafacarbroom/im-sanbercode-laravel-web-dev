<h1>{{ $genre->name }}</h1>
@foreach($books as $book)
<div>{{ $book->title }}</div>
@endforeach