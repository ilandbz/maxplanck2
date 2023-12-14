<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::firstOrCreate([
            'nombre'    => 'ALCALDIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'MUNICIPALIDAD'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'PROCURADURIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'CONCEJO MUNICIPAL'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'OFICINA DE ATENCION AL CIUDADANO Y GESTION DOCUMENTARIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'DESARROLLO ECONÓMICO Y ADMINISTRACIÓN TRIBUTARIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'OFICINA GENERAL DE ADMINISTRACION'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'OFICINA GENERAL DE PLANEAMIENTO Y PRESUPUESTO'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'GERENCIA DE DESARROLLO SOCIAL'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'GERENCIA DE DESARROLLO TERRITORIAL E INFRAESTRUCTURA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'OFICINA GENERAL DE ASESORIA JURIDICA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'GERENCIA DE GESTION AMBIENTAL Y RECURSOS NATURALES'
        ]);
    }
}
