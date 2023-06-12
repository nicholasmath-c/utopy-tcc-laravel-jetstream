<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['developer_id', 'genre_game_id', 'title', 'short_description', 'long_description', 'image', 'price', 'discount', 'release_date', 'age_rating'];

    public function developer()
    {
        return $this->hasOne(Developer::class, 'id', 'developer_id');
    }

    public function genreGame()
    {
        return $this->hasOne(GenreGame::class, 'id', 'genre_game_id');
    }

    public function requerimentsMinimum(): HasOne
    {
        return $this->hasOne(RequerimentsMinimum::class, 'id');
    }

    public function requerimentsRecommended(): HasOne
    {
        return $this->hasOne(RequerimentsRecommended::class, 'id');
    }
}
