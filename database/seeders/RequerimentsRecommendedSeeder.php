<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RequerimentsRecommended;

class RequerimentsRecommendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            RequerimentsRecommended::create([
            'game_id' => 1,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '8 GB',
            'gpu' => 'GeForce GTX 560',
            'storage' => '9 GB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 2,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '8 GB',
            'gpu' => 'GeForce GTX 660',
            'storage' => '11 GB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 3,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '4 GB',
            'gpu' => 'GeForce GTX 660',
            'storage' => '120 MB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 4,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '4 GB',
            'gpu' => 'GeForce GTX 660',
            'storage' => '4 GB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 5,
            'os' => 'Windows XP, Vista, 7, 8, 10',
            'cpu' => '2 GHz',
            'ram' => '4 GB',
            'gpu' => '512MB',
            'storage' => '200 MB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 6,
            'os' => 'Windows XP, Vista, 7',
            'cpu' => 'Pentium 4 3.0 GHz',
            'ram' => '1 GB',
            'gpu' => 'GeForce 7600 GT',
            'storage' => '150 MB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 7,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '4 GB',
            'gpu' => 'GeForce GTX 560',
            'storage' => '20 GB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 8,
            'os' => 'Windows XP, Vista, 7',
            'cpu' => '2 GHz',
            'ram' => '2 GB',
            'gpu' => 'DirectX 9.0c',
            'storage' => '250 MB disponíveis'
            ]);

            RequerimentsRecommended::create([
            'game_id' => 9,
            'os' => 'Windows 10',
            'cpu' => 'Intel Core i5',
            'ram' => '4 GB',
            'gpu' => 'GeForce GTX 560',
            'storage' => '3 GB disponíveis'
            ]);
    }
}
