<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome'=>'Theodoro Sampaio',
            'email'=>'theodoro.sampaio@example.com',
            'senha'=>'sampaio123'
        ]);
        Cliente::create([
            'nome'=>'tiago Sampaio',
            'email'=>'tiago.sampaio@example.com',
            'senha'=>'sampaio125'
        ]);
        Cliente::create([
            'nome'=>'Terencio Sampaio',
            'email'=>'terencio.sampaio@example.com',
            'senha'=>'sampaio127'
        ]);
    }
}
