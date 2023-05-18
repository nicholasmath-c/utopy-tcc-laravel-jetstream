<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreGame extends Model
{
    protected $table='genre_games';
    protected $fillable=['name'];
}
