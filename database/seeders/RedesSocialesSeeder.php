<?php

namespace Database\Seeders;

use App\Models\RedSocial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RedesSocialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        RedSocial::firstOrCreate([
            'titulo' => 'Facebook',
            'url' => 'https://www.facebook.com/muniambo.pe',
            'icono' => 'fab fa-facebook',
            'colorfondo' => '#3b5998'
        ]);
        RedSocial::firstOrCreate([
            'titulo' => 'Youtube',
            'url' => 'https://www.youtube.com/channel/UCVmWraKZdpxlQJ97dSGryyQ',
            'icono' => 'fab fa-youtube',
            'colorfondo' => '#ff0000'
        ]);
        RedSocial::firstOrCreate([
            'titulo' => 'Tik Tok',
            'url' => 'https://www.tiktok.com/@municipalidaddeambo?_t=8gqH4fQKkar&_r=1',
            'icono' => 'fab fa-tiktok',
            'colorfondo' => '#dd4b39'
        ]); 
    }
}
