<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['developer_id', 'genre_game_id', 'title', 'short_description', 'long_description', 'cover', 'banner', 'price', 'discount', 'final_price','release_date', 'age_rating', 'game_file_path', 'status'];

    //Aplicação do desconto no atributo final_price
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            $model->final_price = $model->price - $model->discount;
        });

        static::updating(function ($model){
            $model->final_price = $model->price - $model->discount;
        });
    }

    public function developer()
    {
        return $this->hasOne(Developer::class, 'id', 'developer_id');
    }

    public function genreGame()
    {
        return $this->hasOne(GenreGame::class, 'id', 'genre_game_id');
    }

    public function requerimentsMinimum()
    {
        return $this->hasOne(RequerimentsMinimum::class, 'id');
    }

    public function requerimentsRecommended()
    {
        return $this->hasOne(RequerimentsRecommended::class, 'id');
    }
}
