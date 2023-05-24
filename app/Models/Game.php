<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['developer_id', 'genre_game_id', 'title', 'description', 'image', 'price', 'release_date', 'age_rating'];

    public function developer()
    {
        return $this->hasOne(User::class, 'id', 'developer_id');
    }

    public function genreGame()
    {
        return $this->hasOne(GenreGame::class, 'id', 'genre_game_id');
    }

    public function requerimentsMinimum(): HasOne
    {
        return $this->hasOne(RequerimentsMinimum::class, 'id', 'requeriments_minimum_id');
    }

    public function requerimentsRecommended(): HasOne
    {
        return $this->hasOne(RequerimentsRecommended::class, 'id', 'recommended');
    }
}
