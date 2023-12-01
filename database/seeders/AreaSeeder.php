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
            'nombre'    => 'Alcaldia'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'Municipalidad'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'PROCURADURIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'Consejo Municipal'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'Oficina de Atencion al Ciudadano y Gestion Documentaria'
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
            'nombre'    => 'DESARROLLO SOCIAL'
        ]);             
    }
}
