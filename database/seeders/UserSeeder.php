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
            'firstname' => 'Utopy',
            'lastname' => 'Developer',
            'nickname' => 'UtopyDeveloper',
            'email' => 'utopydeveloper@utopy.com',
            'cellphone' => '11999999999',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'firstname' => 'Utopy',
            'lastname' => 'Administrator',
            'nickname' => 'UtopyAdm',
            'email' => 'utopyadm@utopy.com',
            'cellphone' => '11999999998',
            'password' => Hash::make('12345678'),
            'is_adm' => true
        ]);

        User::create([
            'firstname' => 'Nicholas',
            'lastname' => 'Costa',
            'nickname' => 'Mus4ng',
            'email' => 'nicholascosta@utopy.com',
            'cellphone' => '11999999997',
            'password' => Hash::make('12345678'),
            'is_adm' => false
        ]);

        User::create([
            'firstname' => 'Deivid',
            'lastname' => 'Lima',
            'nickname' => 'WaterCooler',
            'email' => 'deividlima@utopy.com',
            'cellphone' => '11999999996',
            'password' => Hash::make('12345678'),
            'is_adm' => false
        ]);
    }
}
