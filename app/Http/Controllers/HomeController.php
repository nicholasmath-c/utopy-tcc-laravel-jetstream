<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Developer;
use App\Http\Controllers\Developer\DeveloperController;
use App\Models\RequerimentsMinimum;
use App\Models\RequerimentsRecommended;
use App\Http\Controllers\GameController;
use App\Models\GenreGame;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a Home Page from Client
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = GameController::getFirstGame(8);

        return view('home.home', compact('game'));
    }

    public function admissionDeveloper()
    {
        $genreGame = GenreGame::all();

        return view('home.admission-developer')->with(compact('genreGame'));
    }

    public function admissionDeveloperStore(Request $request)
    {
        $developer = Developer::create([
            'user_id' => Auth::user()->id,
            'cpf' => $request->cpf,
        ]);


        if ($request->hasFile('cover')) {
            $destination_path = "public/games/$request->title";
            $cover = $request->file('cover');
            $cover_name = $cover->getClientOriginalName();
            $path = $request->file('cover')->storeAs($destination_path, $cover_name);
        }

        if ($request->hasFile('banner')) {
            $destination_path = "public/games/$request->title";
            $banner = $request->file('banner');
            $banner_name = $banner->getClientOriginalName();
            $path = $request->file('banner')->storeAs($destination_path, $banner_name);
        }

        if ($request->hasFile('game_file_path')) {
            $destination_path = "public/games/$request->title";
            $game_file_path = $request->file('game_file_path');
            $game_file_path_name = $game_file_path->getClientOriginalName();
            $path = $request->file('game_file_path')->storeAs($destination_path, $game_file_path_name);
        }

        $game = Game::create([
            'developer_id' => $developer->id,
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
            'game_file_path' => $game_file_path_name,
            'status' => "Admission"
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

        if ($game && $rm && $rr)
            return redirect()->route('home')->with('message', 'Pedido efetuado com sucesso! Aguarde aprovação.');
    }

    /**
     * Show the About Page
     *
     * @return \Illuminate\Http\Response
     */
    public function showAbout()
    {
        return view('home.about');
    }

    public function showContact()
    {
        return view('home.contact');
    }

    public function showTerms()
    {
        return view('client.terms');
    }

    public function showPolicy()
    {
        return view('client.policy');
    }

    public function showeExplorer()
    {
        return view('client.explorer');
    }
}
