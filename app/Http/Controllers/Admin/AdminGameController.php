<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Developer;
use App\Models\Game;
use App\Models\GenreGame;
use App\Models\RequerimentsMinimum;
use App\Models\RequerimentsRecommended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GameRequest;
use App\Http\Controllers\GameController;

class AdminGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = GameController::getAllGamePaginate(8);

        return view('admin.game.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $developer = Developer::where('admission', "Approved")->get();
        $genreGame = GenreGame::all();

        return view('admin.game.create')->with(compact('genreGame', 'developer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameRequest $request)
    {
        if($request->hasFile('cover'))
        {
            $destination_path = "public/games/$request->title";
            $cover = $request->file('cover');
            $cover_name = $cover->getClientOriginalName();
            $path = $request->file('cover')->storeAs($destination_path, $cover_name);
        }

        if($request->hasFile('banner'))
        {
            $destination_path = "public/games/$request->title";
            $banner = $request->file('banner');
            $banner_name = $banner->getClientOriginalName();
            $path = $request->file('banner')->storeAs($destination_path, $banner_name);
        }

        if($request->hasFile('game_file_path'))
        {
            $destination_path = "public/games/$request->title";
            $game_file_path = $request->file('game_file_path');
            $game_file_path_name = $game_file_path->getClientOriginalName();
            $path = $request->file('game_file_path')->storeAs($destination_path, $game_file_path_name);
        }

        $game = Game::create([
            'developer_id' => $request->developer_id,
            'genre_game_id' => $request->genre_game_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'cover' => $cover_name,
            'banner' => $banner_name,
            'price' => $request->price,
            'discount' => $request->discount,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating,
            'game_file_path' => $game_file_path_name
        ]);

        $rm = RequerimentsMinimum::create([
            'game_id' => $game->id,
            'os' => $request->rm_os,
            'cpu' => $request->rm_cpu,
            'ram' => $request->rm_ram,
            'gpu' => $request->rm_gpu,
            'storage' => $request->rm_storage
        ]);

        $rr = RequerimentsRecommended::create([
            'game_id' => $game->id,
            'os' => $request->rr_os,
            'cpu' => $request->rr_cpu,
            'ram' => $request->rr_ram,
            'gpu' => $request->rr_gpu,
            'storage' => $request->rr_storage
        ]);

        if($game && $rm && $rr)
            return redirect()->route('game.index')->with('message', 'Jogo criado com sucesso!');
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
        $game = Game::findOrFail($id);
        $developer = Developer::where('admission', "Approved")->get();
        $genreGame = GenreGame::all();
        $rm = RequerimentsMinimum::where('game_id', $game->id)->first();
        $rr = RequerimentsRecommended::where('game_id', $game->id)->first();

        return view('admin.game.edit', compact('game', 'developer', 'genreGame', 'rm', 'rr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::where(['id'=>$id])->first();

        if($request->hasFile('cover'))
        {
            $destination_path = "public/games/$request->title";
            $cover = $request->file('cover');
            $cover_name = $cover->getClientOriginalName();
            $path = $request->file('cover')->storeAs($destination_path, $cover_name);
        }
        else{
            $cover_name = $game->cover;
        }

        if($request->hasFile('banner'))
        {
            $destination_path = "public/games/$request->title";
            $banner = $request->file('banner');
            $banner_name = $banner->getClientOriginalName();
            $path = $request->file('banner')->storeAs($destination_path, $banner_name);
        }
        else{
            $banner_name = $game->banner;
        }

        if($request->hasFile('game_file_path'))
        {
            $destination_path = "public/games/$request->title";
            $game_file_path = $request->file('game_file_path');
            $game_file_path_name = $game_file_path->getClientOriginalName();
            $path = $request->file('game_file_path')->storeAs($destination_path, $game_file_path_name);
        }
        else{
            $game_file_path_name = $game->game_file_path;
        }


        $game->update([
            'developer_id' => $request->developer_id,
            'genre_game_id' => $request->genre_game_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'cover' => $cover_name,
            'banner' => $banner_name,
            'price' => $request->price,
            'discount' => $request->discount,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating,
            'game_file_path' => $game_file_path_name
        ]);

        $rm = RequerimentsMinimum::where('game_id', $game->id)->update([
            'game_id' => $game->id,
            'os' => $request->rm_os,
            'cpu' => $request->rm_cpu,
            'ram' => $request->rm_ram,
            'gpu' => $request->rm_gpu,
            'storage' => $request->rm_storage
        ]);

        $rr = RequerimentsRecommended::where('game_id', $game->id)->update([
            'game_id' => $game->id,
            'os' => $request->rr_os,
            'cpu' => $request->rr_cpu,
            'ram' => $request->rr_ram,
            'gpu' => $request->rr_gpu,
            'storage' => $request->rr_storage
        ]);

        if($game && $rm && $rr)
            return redirect()->route("game.index")->with('message', 'Jogo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Game::destroy($id);

        return redirect()->route('game.index')->with('message', 'Jogo excluído com sucesso!');
    }
}
