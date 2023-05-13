<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\GenreGame;
use App\Http\Requests\StoreGenreGameRequest;
use App\Http\Requests\UpdateGenreGameRequest;

class GenreGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasGame = GenreGame::all();

        return view('admin.genre-game.index', [ 'categoriasGame' => $categoriasGame]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre-game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreGameRequest $request)
    {
        // -- Salvar categoria
        $categoria = new GenreGame();
        $categoria->name = $request->nome;
        $categoria->save();

        // -- Obter todas as categorias e redirecionar
        $categoriasGame = GenreGame::all();
        return view('admin.genre-game.index', [ 'categoriasGame' => $categoriasGame]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function show(GenreGame $genreGame)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = GenreGame::findOrFail($id);

        return view('admin.genre-game.edit', [ 'categoria' => $categoria ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreGameRequest  $request
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreGameRequest $request, GenreGame $genreGame)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255'
        ]);

        $genreGame::where(['id'=>$request->id])->update([
            'name' => $request->nome
        ]);

        return redirect()->route('genre-game.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenreGame $genreGame)
    {
        //
    }
}
