<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\User;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Evento::create([
            'user_id' => $user->id,
            'name' => 'filarmonica bh',
            'descricao' => 'Evento de filarmonica em Belo Horizonte',
            'data' => '2027-05-20',
            'local' => 'Teatro Municipal',
            'imagem' => 'https://filarmonica.art.br/wp-content/uploads/2025/10/share-image.webp',
        ]);
        Evento::create([
            'user_id' => $user->id,
            'name' => 'Camerata Emmel',
            'descricao' => 'Evento de camerata emmel',
            'data' => '2027-05-21',
            'local' => 'matriz',
            'imagem' => 'https://www.formiga.mg.gov.br/noticias/galeria-das-noticias/prefeitura-de-formiga-celebra-os-168-anos-do-municipio-com-apresentacao-da-camerata-formiguense/camerata.jpeg'
        ]);
        Evento::create([
            'user_id' => $user->id,
            'name' => 'Rock in Rio',
            'descricao' => 'rock nos rios e lagoas',
            'data' => '2027-05-22',
            'local' => 'lagoa',
            'imagem' => 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Rock_in_Rio_-_Madrid_2012.jpg'
        ]);
    }
}
