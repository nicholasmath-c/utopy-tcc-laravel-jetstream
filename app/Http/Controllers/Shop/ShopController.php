<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Developer;
use App\Models\RequerimentsMinimum;
use App\Models\RequerimentsRecommended;
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
        $rm = RequerimentsMinimum::find($game->id);
        $rr = RequerimentsRecommended::find($game->id);

        if($game->status == "Admission"){
            $admission = true;
            return view('shop.game-page', compact(['game', 'developer', 'rm', 'rr', 'admission']));
        }
        else{
            return view('shop.game-page', compact(['game', 'developer', 'rm', 'rr']));
        }
    }
}
