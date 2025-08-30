<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
    $data = $request->validate([
        'title'=>'required',
        'description'=>'required',
        'genre_id'=>'required',
        'image'=>'nullable|image|mimes:jpg,png,jpeg|max:2048'
    ]);

    if($request->hasFile('image')){
        $data['image'] = $request->file('image')->store('books','public');
    }

    Book::create($data);
    return redirect()->route('books.index');
}
}
