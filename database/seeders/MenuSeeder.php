<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Role;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::select('id')->where('nombre','Super Usuario')->first();

        $menu1 = Menu::firstOrCreate(['nombre' => 'Dashboard','slug' => 'principal',
                                    'icono' => 'fas fa-gauge fa-fw', 'padre_id' => null,'orden' => 0
                                    ]);

        $menu2 = Menu::firstOrCreate(['nombre' => 'Portal','slug' => '/',
                                    'icono' => 'fab fa-windows fa-fw', 'padre_id' => null,'orden' => 1
                                    ])
        ;

        $menu3 = Menu::firstOrCreate(['nombre' => 'Archivos','slug' => 'archivos',
                                    'icono' => 'fas fa-file', 'padre_id' => null,'orden' => 2
        ])
        ;
        $menu4 = Menu::firstOrCreate(['nombre' => 'Menus','slug' => 'menus',
                                    'icono' => 'fas fa-bars', 'padre_id' => null,'orden' => 3
        ])
        ;

        $menu5 = Menu::firstOrCreate(['nombre' => 'Slider','slug' => 'slider',
                                    'icono' => 'fas fa-sliders-h', 'padre_id' => null,'orden' => 4
        ])
        ;


        $menu6 = Menu::firstOrCreate(['nombre' => 'Convocatorias','slug' => 'convocatoria',
                                    'icono' => 'fas fa-bullhorn', 'padre_id' => null,'orden' => 4
        ])
        ;

        $menu7 = Menu::firstOrCreate(['nombre' => 'Directorio','slug' => 'directorio',
                                    'icono' => 'fas fa-address-book', 'padre_id' => null,'orden' => 4
        ])
        ;


        $menu8 = Menu::firstOrCreate(['nombre' => 'Noticias','slug' => 'noticia',
                                    'icono' => 'fas fa-newspaper', 'padre_id' => null,'orden' => 4
        ])
        ;


        $menu9 = Menu::firstOrCreate(['nombre' => 'Popup','slug' => 'popup',
                                    'icono' => 'fas fa-window-maximize', 'padre_id' => null,'orden' => 4
        ])
        ;        


        $menu10 = Menu::firstOrCreate(['nombre' => 'Galeria','slug' => 'galeria',
                                    'icono' => 'fas fa-images', 'padre_id' => null,'orden' => 4
        ])
        ;  

        
        $menu11 = Menu::firstOrCreate(['nombre' => 'Comunicado','slug' => 'comunicado',
                                    'icono' => 'fas fa-bullhorn', 'padre_id' => null,'orden' => 4
        ])
        ;  


        $menu12 = Menu::firstOrCreate(['nombre' => 'Entradas','slug' => 'entrada',
                                    'icono' => 'fas fa-globe', 'padre_id' => null,'orden' => 4
        ])
        ;  

        $menu13 = Menu::firstOrCreate(['nombre' => 'Enlaces Externos','slug' => 'enlaces',
                                    'icono' => 'fas fa-external-link-alt', 'padre_id' => null,'orden' => 5
        ])
        ;  
        
        $menu14 = Menu::firstOrCreate(['nombre' => 'Redes Sociales','slug' => 'redes',
                                    'icono' => 'fab fa-facebook', 'padre_id' => null,'orden' => 6
        ])
        ;  

        $menu15 = Menu::firstOrCreate(['nombre' => 'Datos Generales','slug' => 'dato-general',
                                    'icono' => 'fas fa-cogs', 'padre_id' => null,'orden' => 7
        ])
        ;

        $menu16 = Menu::firstOrCreate(['nombre' => 'Roles','slug' => 'roles',
        'icono' => 'fas fa-user-lock', 'padre_id' => null,'orden' => 8
        ]);

        $menu17 = Menu::firstOrCreate(['nombre' => 'Usuarios','slug' => 'usuarios',
        'icono' => 'fa-solid fa-users', 'padre_id' => null,'orden' => 9
        ]);

        $menu18 = Menu::firstOrCreate(['nombre' => 'Menu Roles','slug' => 'menu-roles',
        'icono' => 'fas fa-user-minus fa-fw', 'padre_id' => null,'orden' => 10
        ]);

        $menu19 = Menu::firstOrCreate(['nombre' => 'Cargos','slug' => 'cargos',
        'icono' => 'fas fa-briefcase', 'padre_id' => null,'orden' => 11
        ]);


        $menu20 = Menu::firstOrCreate(['nombre' => 'Areas','slug' => 'areas',
        'icono' => 'fas fa-user-friends', 'padre_id' => null,'orden' => 12
        ]);        

        $menu21 = Menu::firstOrCreate(['nombre' => 'Tipo Convocatoria','slug' => 'tipo-convocatoria',
        'icono' => 'fas fa-tasks', 'padre_id' => null,'orden' => 12
        ]);                

        $role1->menus()->sync([
            $menu1->id, 
            $menu2->id,
            $menu3->id,
            $menu4->id, 
            $menu5->id,
            $menu6->id,
            $menu7->id,
            $menu8->id,
            $menu9->id,
            $menu10->id,
            $menu11->id,
            $menu12->id,
            $menu13->id,
            $menu14->id,
            $menu15->id,
            $menu16->id,
            $menu17->id,
            $menu18->id,
            $menu19->id,
            $menu20->id,
            $menu21->id,

        ]);
    }
}
