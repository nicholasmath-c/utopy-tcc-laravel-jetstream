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
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])->orderBy('id', 'desc')->get();

        return $game;
    }

    public static function getAllGamePaginate($pagination)
    {
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])->orderBy('id', 'desc')->paginate($pagination);

        return $game;
    }

    public static function takeGame($quantity)
    {
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])->orderBy('id', 'desc')->take($quantity)->get();

        return $game;
    }

    public static function getAllGameDeveloper($developer_id)
    {
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])
            ->where('developer_id', $developer_id)
            ->orderBy('id', 'desc')
            ->get();

        return $game;
    }

    public static function getAllGameDeveloperPaginate($developer_id, $pagination)
    {
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])
            ->orderBy('id', 'desc')
            ->where('developer_id', $developer_id)
            ->paginate($pagination);

        return $game;
    }

    public static function getFirstGame($quantity)
    {
        $game = Game::whereNotIn('status', ['Admission', 'Admission Rejected'])->orderBy('id', 'desc')->take($quantity)->get();

        return $game;
    }

    public static function getAllAdmissionGame()
    {
        $game = Game::where('status', 'Admission')->get();

        return $game;
    }

    public static function getAllAdmissionGamePaginate($pagination)
    {
        $game = Game::whereIn('status', ['Admission', 'Admission Active', 'Admission Rejected'])->paginate($pagination);

        return $game;
    }

    public static function gameDownload($id)
    {
        $game = Game::findOrFail($id);

        $arquivoPath = "storage/games/$game->title/$game->game_file_path";

        return response()->download($arquivoPath);
    }
}
