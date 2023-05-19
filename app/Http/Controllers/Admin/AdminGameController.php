<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GenreGame;
use Illuminate\Http\Request;

class AdminGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::paginate(5);

        return view('admin.game.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genreGame = GenreGame::all();

        return view('admin.game.create', compact('genreGame'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
