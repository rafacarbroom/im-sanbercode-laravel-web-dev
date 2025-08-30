<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Book $book){
    $request->validate(['comment'=>'required']);
    $book->comments()->create([
        'user_id'=>auth()->id(),
        'comment'=>$request->comment
    ]);
    return redirect()->back();
}
}
