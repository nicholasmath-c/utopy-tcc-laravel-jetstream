<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Deivid',
            'lastname' => 'Lima',
            'nickname' => 'WaterCooler',
            'email' => 'deividlima@utopy.com',
            'cellphone' => '11999999996',
            'password' => Hash::make('12345678'),
            'is_adm' => false
        ]);

        User::create([
            'firstname' => 'Gustavo',
            'lastname' => 'Jesus',
            'nickname' => 'Punk',
            'email' => 'gustavojesus@utopy.com',
            'cellphone' => '11999999995',
            'password' => Hash::make('12345678'),
            'is_adm' => false
        ]);

        User::create([
            'firstname' => 'Ronald',
            'lastname' => 'Ribeiro',
            'nickname' => 'Ronald0',
            'email' => 'ronaldribeiro@utopy.com',
            'cellphone' => '11999999994',
            'password' => Hash::make('12345678'),
            'is_adm' => false
        ]);

        User::create([
            'firstname' => 'Nicholas',
            'lastname' => 'Costa',
            'nickname' => 'Mus4ng',
            'email' => 'nicholascosta@utopy.com',
            'cellphone' => '11999999997',
            'password' => Hash::make('12345678'),
            'is_adm' => true
        ]);
    }
}
