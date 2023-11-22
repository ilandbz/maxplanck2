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
            'nombre'    => 'GERENCIA MUNICIPAL'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'PROCURADURIA'
        ]);
        Area::firstOrCreate([
            'nombre'    => 'Consejo Municipal'
        ]);        
    }
}
