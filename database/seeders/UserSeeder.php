<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Theodoro Sampaio',
            'email' => 'theodoro.sampaio@gmail.com',
            'password' => 'sampaio123'
        ]);
        User::create([
            'name' => 'tiago Sampaio',
            'email' => 'tiago.sampaio@gmail.com',
            'password' => 'sampaio125'
        ]);
        User::create([
            'name' => 'Terencio Sampaio',
            'email' => 'terencio.sampaio@gmail.com',
            'password' => 'sampaio127'
        ]);
    }
}
