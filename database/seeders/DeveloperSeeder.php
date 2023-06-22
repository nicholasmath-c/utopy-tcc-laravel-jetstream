<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::create([
            'user_id' => '1',
            'cpf' => '536.284.680-95',
            'admission' => "Approved"
        ]);
    }
}
