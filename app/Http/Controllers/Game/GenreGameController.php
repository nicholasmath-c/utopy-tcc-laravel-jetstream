<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\GenreGame;
use Illuminate\Http\Request;
use App\Http\Requests\GenreGameRequest;

class GenreGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriasGame = GenreGame::paginate(5);

        return view('admin.genre-game.index', compact('categoriasGame'));
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
        $categoria = GenreGame::create([
            'name' => $request->nome
        ]);

        if($categoria)
            return redirect()->route('genre-game.index');
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
        $categoria = GenreGame::findOrFail($id);

        return view('admin.genre-game.edit', [ 'categoria' => $categoria ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GenreGame::where(['id'=>$id])->update([
            'name' => $request->nome
        ]);

        return redirect()->route('genre-game.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GenreGame::destroy($id);

        return redirect()->route('genre-game.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
