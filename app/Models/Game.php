<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function genre() {
        return $this->belongsTo(GenreGame::class);
    }

    public function shopcart() {
        return $this->hasMany(ShopCart::class);
    }
}
