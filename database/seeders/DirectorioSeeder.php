<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Cargo;
use App\Models\Directorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Directorio::firstorCreate([
            'titulo'       => 'CAYO LEONIDAS SANTIAGO CAMPOS',
            'dni'          => '22672701',
            'area_id'      => Area::where('nombre', 'Alcaldia')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Alcalde')->value('id'),
            'email'        => '',
            'celular'      => '',
            'foto'         => '22672701.jpg'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'CAYO LEONIDAS SANTIAGO CAMPOSSASDADS',
            'dni'          => '11111111',
            'area_id'      => Area::where('nombre', 'GERENCIA MUNICIPAL')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'celular'      => '',
            'foto'         => 'default.png'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'CAYO LEONIDAS SANTIAGO AAAAA',
            'dni'          => '22222222',
            'area_id'      => Area::where('nombre', 'PROCURADURIA')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'PROCURADOR PÚBLICO MUNICIPAL')->value('id'),
            'email'        => '',
            'celular'      => '',
            'foto'         => 'default.png'
        ]);        

        $faker = Faker::create();
        foreach (range(1, 6) as $index) {
            Directorio::firstOrCreate([
                'titulo'    => $faker->name,
                'dni'       => $faker->unique()->randomNumber(8),
                'area_id'   => Area::where('nombre', 'Consejo Municipal')->value('id'),
                'cargo_id'  => Cargo::where('nombre', 'Regidor')->value('id'),
                'email'     => $faker->unique()->safeEmail,
                'celular'   => $faker->phoneNumber,
                'foto'      => 'default.png'
            ]);
        }
        foreach (range(1, 5) as $index) {
            Directorio::firstOrCreate([
                'titulo'    => $faker->name,
                'dni'       => $faker->unique()->randomNumber(8),
                'area_id'   => Area::where('nombre', 'PROCURADURIA')->value('id'),
                'cargo_id'  => Cargo::where('nombre', 'PROCURADOR PÚBLICO MUNICIPAL')->value('id'),
                'email'     => $faker->unique()->safeEmail,
                'celular'   => $faker->phoneNumber,
                'foto'      => 'default.png'
            ]);
        }
    }
}
