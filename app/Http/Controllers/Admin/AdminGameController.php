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

class AdminGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::paginate(5);

        $user = Auth::user();

        if($user->user_type == 2){
            return "<h1>Você não possui permissão para acessar a área administrativa do sistema.</h1>";
        }
        else{
            return view('admin.game.index', compact('game'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dev = Developer::where('is_admitted', true)->get();
        $genreGame = GenreGame::all();

        return view('admin.game.create')->with(compact('genreGame', 'dev'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('thumb'))
        {
            $destination_path = "public/games/$request->title";
            $thumb = $request->file('thumb');
            $thumb_name = $thumb->getClientOriginalName();
            $path = $request->file('thumb')->storeAs($destination_path, $thumb_name);
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
            'thumb' => $thumb_name,
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
        $game = Game::findOrFail($id);
        $dev = Developer::where('is_admitted', true)->get();
        $genreGame = GenreGame::all();;
        $rm = RequerimentsMinimum::where('game_id', $game->id)->first();
        $rr = RequerimentsRecommended::where('game_id', $game->id)->first();

        return view('admin.game.edit', compact('game', 'dev', 'genreGame', 'rm', 'rr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::where(['id'=>$id])->first();

        if($request->hasFile('image'))
        {
            $destination_path = 'public/img/games_img';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }
        else{
            $image_name = $game->image;
        }

        $game->update([
            'developer_id' => $request->developer_id,
            'genre_game_id' => $request->genre_game_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_name,
            'price' => $request->price,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating
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

        return redirect()->route("game.index")->with('success', 'Jogo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Game::destroy($id);

        return redirect()->route('game.index')->with('success', 'Jogo excluído com sucesso!');
    }
}
