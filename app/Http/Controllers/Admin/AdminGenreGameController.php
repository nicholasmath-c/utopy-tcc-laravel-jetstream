<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GenreGame;
use Illuminate\Http\Request;
use App\Http\Requests\GenreGameRequest;

class AdminGenreGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genreGame = GenreGame::paginate(6);

        return view('admin.genre-game.index', compact('genreGame'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genre-game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // -- Salvar categoria
        $genreGame = GenreGame::create([
            'name' => $request->name
        ]);

        if($genreGame)
            return redirect()->route('genre-game.index')->with('success', 'Gênero criado com sucesso!');
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
        $genreGame = GenreGame::findOrFail($id);

        return view('admin.genre-game.edit', compact('genreGame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GenreGame::where(['id'=>$id])->update([
            'name' => $request->name
        ]);

        return redirect()->route('genre-game.index')->with('success', 'Gênero atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GenreGame::destroy($id);

        return redirect()->route('genre-game.index')->with('success', 'Gênero excluído com sucesso!');
    }
}
