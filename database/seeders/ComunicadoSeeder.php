<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comunicado::firstorCreate([
            'titulo'        => 'Comunicado 1',
            'nombreImagen'  => '20231112211550_655186d661048.png'
        ]);
    }
}
