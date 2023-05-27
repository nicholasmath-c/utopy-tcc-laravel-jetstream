<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GenreGame;

class GenreGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenreGame::create([
            'name' => 'Aventura'
        ]);

        GenreGame::create([
            'name' => 'Terror'
        ]);
    }
}
