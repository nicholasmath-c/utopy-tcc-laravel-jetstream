<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['developer_id', 'genre_game_id', 'title', 'description', 'image', 'price', 'release_date', 'age_rating'];

    public function relGenreGame(){
        return $this->hasOne('App\Models\GenreGame', 'id', 'genre_game_id');
    }

    public function relRequerimentsMinimum(){
        return $this->hasOne('App\Models\RequerimentsMinimum', 'id', 'requeriments_minimum_id');
    }

    public function relRequerimentsRecommended(){
        return $this->hasOne('App\Models\RequerimentsRecommended', 'id', 'requeriments_recommended_id');
    }
}
