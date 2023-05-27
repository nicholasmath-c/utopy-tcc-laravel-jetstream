<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::all();

        return view('home.home', compact('game'));
    }
    /**
     * Display the specified resource.
     */
    public function product($id)
    {
        $game = Game::findOrFail($id);

        return view('shop.game-page', compact('game'));
    }
}
