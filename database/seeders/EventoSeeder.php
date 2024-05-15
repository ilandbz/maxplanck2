<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::firstorCreate([
            'titulo'    => 'Micro Biological Workshop',
            'subtitulo' => '10.35 am to 1.00 pm',
            'lugar'     => 'Place: Central Hall, New York',
            'fecha'     => '2020-05-02',
            'imagen'    => 'evento1.jpg',
            'contenido' => 'asdasdasd aaa s',
        ]);
    }
}
