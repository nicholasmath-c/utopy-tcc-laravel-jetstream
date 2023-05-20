<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GenreGame extends Model
{
    protected $table='genre_games';
    protected $fillable=['name'];

    public function game(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
