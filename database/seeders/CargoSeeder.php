<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cargo::firstOrCreate([
            'nombre'    => 'ALCALDE PROVINCIAL DE AMBO'
        ]);
        Cargo::firstOrCreate([
            'nombre'    => 'GERENTE MUNICIPAL'
        ]);         
        Cargo::firstOrCreate([
            'nombre'    => 'GERENTE'
        ]); 
        Cargo::firstOrCreate([
            'nombre'    => 'PROCURADOR PÚBLICO MUNICIPAL'
        ]);
        Cargo::firstOrCreate([
            'nombre'    => 'REGIDOR'
        ]);
        Cargo::firstOrCreate([
            'nombre'    => 'TENIE3NTE ALCALDE'
        ]);

    }
}
