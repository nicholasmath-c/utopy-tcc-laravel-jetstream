<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RequerimentsMinimum;

class RequerimentsMinimumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RequerimentsMinimum::create([
            'game_id' => 1,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core i3',
            'ram' => '4 GB',
            'gpu' => 'GeForce GTX 470',
            'storage' => '9 GB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 2,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core 2 Duo E4500',
            'ram' => '4 GB',
            'gpu' => 'GeForce GT 240',
            'storage' => '11 GB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 3,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core i3-530',
            'ram' => '2 GB',
            'gpu' => 'GeForce 510',
            'storage' => '120 MB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 4,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core 2 Duo E4400',
            'ram' => '2 GB',
            'gpu' => 'GeForce 7600 GT',
            'storage' => '4 GB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 5,
            'os' => 'Windows XP, Vista, 7, 8, 10',
            'cpu' => '2 GHz',
            'ram' => '2 GB',
            'gpu' => '128MB',
            'storage' => '200 MB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 6,
            'os' => 'Windows XP, Vista, 7',
            'cpu' => 'Pentium 4 2.0 GHz',
            'ram' => '512 MB',
            'gpu' => 'GeForce 6200',
            'storage' => '150 MB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 7,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core2 Duo E8400',
            'ram' => '2 GB',
            'gpu' => 'GeForce 9600 GT',
            'storage' => '20 GB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 8,
            'os' => 'Windows XP, Vista, 7',
            'cpu' => '2 GHz',
            'ram' => '1 GB',
            'gpu' => 'DirectX 9.0c',
            'storage' => '250 MB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 9,
            'os' => 'Windows 7',
            'cpu' => 'Intel Core 2 Duo E8400',
            'ram' => '2 GB',
            'gpu' => 'GeForce 9600 GT',
            'storage' => '3 GB disponíveis'
        ]);

        RequerimentsMinimum::create([
            'game_id' => 10,
            'os' => 'Windows XP, Vista, 7',
            'cpu' => '2 GHz',
            'ram' => '1 GB',
            'gpu' => 'DirectX 9.0c',
            'storage' => '250 MB disponíveis'
        ]);
    }
}
