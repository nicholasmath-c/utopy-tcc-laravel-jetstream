<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    protected $table = 'shopcarts';

    public static function jogoNoCarrinho($game_id) {
        $esta_no_carrinho = Shopcart::where('game_id', $game_id) ? 1 : 0;
        return $esta_no_carrinho;
    }
}   
