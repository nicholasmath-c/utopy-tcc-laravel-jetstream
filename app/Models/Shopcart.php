<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    protected $table = 'shopcarts';

    protected static function obterTodosProdutos() {
        $produtos = Shopcart::join('games', 'games.id', '=', 'shopcarts.game_id')
            ->join('genre_games', 'genre_games.id', '=', 'games.genre_game_id')
                ->select(
                    'shopcarts.id as shopcart_id',
                    'genre_games.name as genre_game',
                    'shopcarts.*',
                    'games.*',
                    'genre_games.*'
                )
                ->get()
                ->map(function ($item) {
                    return $item->makeHidden([
                        'id',
                        'games.id',
                        'games.genre_game_id',
                        'shopcarts.game_id',
                        'genre_games.game_id',
                        'genre_games.created_at',
                        'genre_games.updated_at'
                    ]);
                });

        return $produtos;
    }

    public static function jogoNoCarrinho($game_id) {
        $esta_no_carrinho = Shopcart::
            where('game_id', $game_id)
                ->count();

        return $esta_no_carrinho;
    }
}
