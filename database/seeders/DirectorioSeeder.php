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
        
        Directorio::firstorCreate([
            'titulo'       => 'CAYO LEONIDAS SANTIAGO CAMPOS',
            'dni'          => '22672701',
            'area_id'      => Area::where('nombre', 'Municipalidad')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'ALCALDE PROVINCIAL DE AMBO')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/95042-cayo-leonidas-santiago-campos',
            'celular'      => '',
            'foto'         => '22672701.jpg',
            'funciones'    => 'Gobernamos, conducimos y lideramos el desarrollo de la Provincia de Ambo, Gestionando y promoviendo el desarrollo sostenible e integral, asi como el bienestar humano, mediante la concertación institucional y la participación de la sociedad civil organizada.'
        ]);        
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
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116874-alberto-bustillos-cuba',
            'celular'      => '',
            'foto'         => '46138804.jpg'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'WILMER QUISPE RAMOS',
            'dni'          => '22520079',
            'area_id'      => Area::where('nombre', 'DESARROLLO ECONÓMICO Y ADMINISTRACIÓN TRIBUTARIA')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116875-wilmer-quispe-ramos',
            'celular'      => '',
            'foto'         => '22520079.jpg'
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
            'area_id'      => Area::where('nombre', 'GERENCIA DE DESARROLLO SOCIAL')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'Gerente')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116884-augusto-carbajal-ponce',
            'celular'      => '',
            'foto'         => '42230339.jpg'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'Marcelo Vitor Gabriel Edinson',
            'dni'          => '40402225',
            'area_id'      => Area::where('nombre', 'GERENCIA DE DESARROLLO TERRITORIAL E INFRAESTRUCTURA')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'GERENTE')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116891-gabriel-edinson-marcelo-vitor',
            'celular'      => '',
            'foto'         => '40402225.jpg'
        ]);
        Directorio::firstorCreate([
            'titulo'       => 'Nelson Elvis Prudencio Agui',
            'dni'          => '22517630',
            'area_id'      => Area::where('nombre', 'OFICINA GENERAL DE ASESORIA JURIDICA')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'GERENTE')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/116893-nelson-elvis-prudencio-agui',
            'celular'      => '',
            'foto'         => '22517630.jpg'
        ]);

        Directorio::firstorCreate([
            'titulo'       => 'Maura Gabriela Gargate Atanacia',
            'dni'          => '72731683',
            'area_id'      => Area::where('nombre', 'GERENCIA DE GESTION AMBIENTAL Y RECURSOS NATURALES')->value('id'),
            'cargo_id'     => Cargo::where('nombre', 'GERENTE')->value('id'),
            'email'        => '',
            'link'         => 'https://www.gob.pe/institucion/muniambo/funcionarios/118452-maura-gabriela-gargate-atanacio',
            'celular'      => '',
            'foto'         => '72731683.jpg'
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

    }
}
