<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Nicholas',
            'lastname' => 'Costa',
            'nickname' => 'Nick',
            'email' => 'nicholasmatheus.costa@hotmail.com',
            'cellphone' => '11956523233',
            'password' => '12345678',
            'user_type' => 1
        ]);
    }
}
