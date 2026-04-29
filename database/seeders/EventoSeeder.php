<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'nome'=>'filarmonica bh',
            'descricao'=>'Evento de filarmonica em Belo Horizonte',
            'data'=>'2024-05-20 14:30:05',
            'local'=>'Teatro Municipal'
        ]);
        Evento::create([
            'nome'=>'camerata emmel',
            'descricao'=>'Evento de camerata emmel',
            'data'=>'2024-05-21 19:00:00',
            'local'=>'matriz'
        ]);
        Evento::create([
            'nome'=>'Jornada musical',
            'descricao'=>'Evento de jornada musical',
            'data'=>'2024-05-22 20:00:00',
            'local'=>'Escolas'
        ]);
    }
}
