<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Developer;
use App\Http\Controllers\User\DeveloperController;

class ShopController extends Controller
{
    public function index()
    {
        $game = Game::all();

        return view('shop.index', compact('game'));
    }

    public function product($id)
    {
        $game = Game::findOrFail($id);
        $developer = Developer::find($game->developer_id);

        return view('shop.game-page', compact(['game', 'developer']));
    }
}
