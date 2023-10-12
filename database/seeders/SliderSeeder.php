<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::firstOrCreate([
            'titulo' => 'Municipalidad Provincial de Ambo',
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => '#',
            'nombreImagen' => 'slide1.jpg'
        ]);
        Slider::firstOrCreate([
            'titulo' => 'Gestion 2023-2029',
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide2.jpg'
        ]);
        Slider::firstOrCreate([
            'titulo' => null,
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide3.jpg'
        ]);
    }
}
