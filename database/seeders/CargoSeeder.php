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
            'nombre'    => 'Alcalde'
        ]);
        Cargo::firstOrCreate([
            'nombre'    => 'Gerente Municipal'
        ]);         
        Cargo::firstOrCreate([
            'nombre'    => 'Gerente'
        ]); 
        Cargo::firstOrCreate([
            'nombre'    => 'PROCURADOR PÚBLICO MUNICIPAL'
        ]);
        Cargo::firstOrCreate([
            'nombre'    => 'Regidor'
        ]);

    }
}
