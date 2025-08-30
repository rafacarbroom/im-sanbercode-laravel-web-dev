<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show(Genre $genre){
    $books = $genre->books;
    return view('genres.show', compact('genre','books'));
}
}
