<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required|numeric'
        ]);

        Game::create($request->all());
        return redirect()->route('game.index')->with('success','Game berhasil ditambahkan!');
    }

    public function show(Game $game)
    {
        return view('game.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required|numeric'
        ]);

        $game->update($request->all());
        return redirect()->route('game.index')->with('success','Game berhasil diupdate!');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('game.index')->with('success','Game berhasil dihapus!');
    }
}