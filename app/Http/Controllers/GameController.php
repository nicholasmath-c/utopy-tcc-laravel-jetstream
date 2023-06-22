<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public static function getAllGame()
    {
        $game = Game::whereNotIn('status', ['Admission'])->get();

        return $game;
    }

    public static function getAllGamePaginate($pagination)
    {
        $game = Game::whereNotIn('status', ['Admission'])->paginate($pagination);

        return $game;
    }

    public static function getFirstGame($quantity)
    {
        $game = Game::whereNotIn('status', ['Admission'])->orderBy('id', 'desc')->take($quantity)->get();

        return $game;
    }

    public static function getAllAdmissionGame()
    {
        $game = Game::where('status', 'Admission')->get();

        return $game;
    }

    public static function getAllAdmissionGamePaginate($pagination)
    {
        $game = Game::where('status', 'Admission')->paginate($pagination);

        return $game;
    }

    public static function gameDownload($id)
    {
        $game = Game::findOrFail($id);

        $arquivoPath = "storage/games/$game->title/$game->game_file_path";

        return response()->download($arquivoPath);
    }
}
