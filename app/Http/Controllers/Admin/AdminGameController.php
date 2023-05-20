<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Game;
use App\Models\GenreGame;
use App\Models\RequerimentsMinimum;
use App\Models\RequerimentsRecommended;
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
        $dev = User::where('is_dev', true)->get();
        $genreGame = GenreGame::all();

        return view('admin.game.create')->with(compact('genreGame', 'dev'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            $destination_path = 'public/img/games_img';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        $game = Game::create([
            'developer_id' => $request->developer_id,
            'genre_game_id' => $request->genre_game_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_name,
            'price' => $request->price,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating
        ]);

        if($game)
            return redirect()->route('game.index')->with('success', 'Jogo criado com sucesso!');
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
