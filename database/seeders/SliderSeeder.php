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
            'nombreImagen' => 'slide1.webp'
        ]);
        Slider::firstOrCreate([
            'titulo' => 'Gestión 2023-2026',
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide2.webp'
        ]);
        Slider::firstOrCreate([
            'titulo' => null,
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide3.webp'
        ]);
        Slider::firstOrCreate([
            'titulo' => null,
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide4.webp'
        ]);
        Slider::firstOrCreate([
            'titulo' => null,
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide5.jpg'
        ]);  
        Slider::firstOrCreate([
            'titulo' => null,
            'subtitulo' =>  null,
            'nombrebutton1' => null,
            'nombrebutton2' => null,
            'link1' => 'our-courses-left-sidebar.html',
            'link2' => null,
            'nombreImagen' => 'slide6.jpg'
        ]);                
    }
}
