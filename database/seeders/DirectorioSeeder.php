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
            'titulo'       => 'GROVER LUCIO VASQUES SALAZAR',
            'dni'          => '22749778',
            'area_id'      => Area::where('nombre', 'Municipalidad')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente Municipal')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116873-grover-lucio-vasquez-salazar',
            'celular'      => '',
            'foto'         => '22749778.jpg'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'ALBERTO BUSTILLOS CUBA',
            'dni'          => '46138804',
            'area_id'      => Area::where('nombre', 'Oficina de Atencion al Ciudadano y Gestion Documentaria')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => '',
            'celular'      => '',
            'foto'         => 'default.png'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'WILMER QUISPE RAMOS',
            'dni'          => '22520079',
            'area_id'      => Area::where('nombre', 'DESARROLLO ECONÓMICO Y ADMINISTRACIÓN TRIBUTARIA')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116875-wilmer-quispe-ramos',
            'celular'      => '',
            'foto'         => 'default.png'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'YONEL INOCENCIO AROSTEGUI',
            'dni'          => '42308622',
            'area_id'      => Area::where('nombre', 'OFICINA GENERAL DE PLANEAMIENTO Y PRESUPUESTO')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116881-yonel-inocencio-arostegui',
            'celular'      => '',
            'foto'         => '42308622.jpg'
        ]);        
        Directorio::firstorCreate([
            'titulo'       => 'Augusto Carbajal Ponce',
            'dni'          => '42230339',
            'area_id'      => Area::where('nombre', 'DESARROLLO SOCIAL')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116884-augusto-carbajal-ponce',
            'celular'      => '',
            'foto'         => '42230339.jpg'
        ]);
          
        Directorio::firstorCreate([
            'titulo'       => 'MEJÍA BERNAL, CHRISTIAN JONATHAN',
            'dni'          => '70507227',
            'area_id'      => Area::where('nombre', 'Municipalidad')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'PROCURADOR PÚBLICO MUNICIPAL')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/119050-mejia-bernal-christian-jonathan',
            'celular'      => '',
            'foto'         => '70507227.jpg'
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
