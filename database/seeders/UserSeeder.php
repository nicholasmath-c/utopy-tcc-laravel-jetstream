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
            'user_type' => 1
        ]);

        User::create([
            'firstname' => 'Utopy',
            'lastname' => 'Manager',
            'nickname' => 'UtopyManager',
            'email' => 'utopymanager@utopy.com',
            'cellphone' => '11999999998',
            'password' => Hash::make('12345678'),
            'user_type' => 2
        ]);
    }
}
