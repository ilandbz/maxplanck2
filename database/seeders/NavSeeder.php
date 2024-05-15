<?php

namespace Database\Seeders;

use App\Models\Nav;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        // Crear el menú padre "Nosotros"
        $padreNosotros = Nav::firstOrCreate([
            'nombre' => 'Nosotros',
            'url' => '#',
            'ruta' => 'nosotros',
            'slug' => 'nosotros',
            'icono' => '',
            'padre_id' => null,
            'orden' => 2,
        ]);

        // Crear los submenús de "Nosotros"
        $submenus = [
            [
                'nombre' => 'Quienes Somos',
                'url'   => 'quienes-somos',
                'ruta'   => 'quienes-somos',
                'slug' => 'quienes-somos',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'Visión, Misión',
                'url'   => 'mision-vision',
                'ruta'   => 'mision-vision',
                'slug' => 'mision-vision',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 2,
            ],
            [
                'nombre' => 'Organización institucional',
                'url'   => 'organizacion-institucional/',
                'ruta'   => 'nosotros.organizacion-institucional',
                'slug' => 'nosotros-organizacion-institucional',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 3,
            ],
            [
                'nombre' => 'Plana jerárquica',
                'url'   => 'plana-jerarquica/',
                'ruta'   => 'plana-jerarquica',
                'slug' => 'plana-jerarquica',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 4,
            ],
            [
                'nombre' => 'Plana docente',
                'url'   => 'plana-docente/',
                'ruta'   => 'nosotros.plana-docente',
                'slug' => 'nosotros-plana-docente',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 5,
            ],
            [
                'nombre' => 'Locales',
                'url'   => 'locales/',
                'ruta'   => 'nosotros.locales',
                'slug' => 'nosotros-locales',
                'icono' => '',
                'padre_id' => $padreNosotros->id,
                'orden' => 6,
            ],
        ];

        // Crear los submenús
        foreach ($submenus as $submenu) {
            Nav::firstOrCreate($submenu);
        }


        // Crear el menú padre "Programas de estudios"
        $padreProgramasEstudio = Nav::firstOrCreate([
            'nombre' => 'Programas de estudios',
            'url' => '#',
            'ruta' => 'programas-estudios',
            'slug' => 'programas-estudios',
            'icono' => '',
            'padre_id' => null,
            'orden' => 3,
        ]);

        // Crear los submenús de "Programas de estudios"
        $submenusProgramasEstudio = [
            [
                'nombre' => 'Enfermeria Tecnica',
                'url'   => 'enfermeria-tecnica',
                'ruta'   => 'enfermeria.tecnica',
                'slug' => 'enfermeria-tecnica',
                'icono' => '',
                'padre_id' => $padreProgramasEstudio->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'Produccion Agropecuaria',
                'url'   => 'produccion-agropecuaria/',
                'ruta'   => 'produccion-agropecuaria',
                'slug' => 'produccion-agropecuaria',
                'icono' => '',
                'padre_id' => $padreProgramasEstudio->id,
                'orden' => 2,
            ],
            [
                'nombre' => 'Mecanica Automotriz',
                'url'   => 'mecanica-automotriz',
                'ruta'   => 'mecanica-automotriz',
                'slug' => 'mecanica-automotriz',
                'icono' => '',
                'padre_id' => $padreProgramasEstudio->id,
                'orden' => 3,
            ],
        ];

        // Crear los submenús
        foreach ($submenusProgramasEstudio as $submenu) {
            Nav::firstOrCreate($submenu);
        }

        // Crear el menú padre "Admisión y matrículas"
        $padreAdmisionMatriculas = Nav::firstOrCreate([
            'nombre' => 'Admisión y matrículas',
            'url' => '#',
            'ruta' => 'admision-matriculas',
            'slug' => 'admision-matriculas',
            'icono' => '',
            'padre_id' => null,
            'orden' => 4,
        ]);

        // Crear los submenús de "Admisión y matrículas"
        $submenusAdmisionMatriculas = [
            [
                'nombre' => 'Admisión 2024',
                'url'   => 'admision-2024/',
                'ruta'   => 'admision-matriculas.admision-2024',
                'slug' => 'admision-matriculas-admision-2024',
                'icono' => '',
                'padre_id' => $padreAdmisionMatriculas->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'Matrícula',
                'url'   => 'matricula/',
                'ruta'   => 'admision-matriculas.matricula',
                'slug' => 'admision-matriculas-matricula',
                'icono' => '',
                'padre_id' => $padreAdmisionMatriculas->id,
                'orden' => 2,
            ],
            [
                'nombre' => 'Becas y créditos',
                'url'   => 'becas-y-creditos/',
                'ruta'   => 'admision-matriculas.becas-y-creditos',
                'slug' => 'admision-matriculas-becas-y-creditos',
                'icono' => '',
                'padre_id' => $padreAdmisionMatriculas->id,
                'orden' => 3,
            ],
            [
                'nombre' => 'Resultados 2024',
                'url'   => 'resultados-2024/',
                'ruta'   => 'admision-matriculas.resultados-2024',
                'slug' => 'admision-matriculas-resultados-2024',
                'icono' => '',
                'padre_id' => $padreAdmisionMatriculas->id,
                'orden' => 4,
            ],
        ];

        // Crear los submenús
        foreach ($submenusAdmisionMatriculas as $submenu) {
            Nav::firstOrCreate($submenu);
        }


        // Crear el menú padre "Transparencia"
        $padreTransparencia = Nav::firstOrCreate([
            'nombre' => 'Transparencia',
            'url' => '#',
            'ruta' => 'transparencia',
            'slug' => 'transparencia',
            'icono' => '',
            'padre_id' => null,
            'orden' => 5,
        ]);

        // Crear los submenús de "Transparencia"
        $submenusTransparencia = [
            [
                'nombre' => 'Licenciamiento',
                'url'   => 'licenciamiento/',
                'ruta'   => 'transparencia.licenciamiento',
                'slug' => 'transparencia-licenciamiento',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'Acreditación',
                'url'   => 'acreditacion/',
                'ruta'   => 'transparencia.acreditacion',
                'slug' => 'transparencia-acreditacion',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 2,
            ],
            [
                'nombre' => 'Resoluciones',
                'url'   => 'resoluciones/',
                'ruta'   => 'transparencia.resoluciones',
                'slug' => 'transparencia-resoluciones',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 3,
            ],
            [
                'nombre' => 'Certificación de Competencias Profesionales',
                'url'   => 'certificacion-competencias/',
                'ruta'   => 'transparencia.certificacion-competencias',
                'slug' => 'transparencia-certificacion-competencias',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 4,
            ],
            [
                'nombre' => 'Documentos de gestión',
                'url'   => 'documentos-gestion/',
                'ruta'   => 'transparencia.documentos-gestion',
                'slug' => 'transparencia-documentos-gestion',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 5,
            ],
            [
                'nombre' => 'Estadísticas',
                'url'   => 'estadisticas/',
                'ruta'   => 'transparencia.estadisticas',
                'slug' => 'transparencia-estadisticas',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 6,
            ],
            [
                'nombre' => 'Inversiones y recursos económicos',
                'url'   => 'inversiones-recursos-economicos/',
                'ruta'   => 'transparencia.inversiones-recursos-economicos',
                'slug' => 'transparencia-inversiones-recursos-economicos',
                'icono' => '',
                'padre_id' => $padreTransparencia->id,
                'orden' => 7,
            ],
        ];

        // Crear los submenús
        foreach ($submenusTransparencia as $submenu) {
            Nav::firstOrCreate($submenu);
        }



        // Crear el menú padre "Trámites"
        $padreTramites = Nav::firstOrCreate([
            'nombre' => 'Trámites',
            'url' => '#',
            'ruta' => 'tramites',
            'slug' => 'tramites',
            'icono' => '',
            'padre_id' => null,
            'orden' => 6,
        ]);

        // Crear los submenús de "Trámites"
        $submenusTramites = [
            [
                'nombre' => 'Mesa de partes',
                'url'   => 'mesa-de-partes/',
                'ruta'   => 'tramites.mesa-de-partes',
                'slug' => 'tramites-mesa-de-partes',
                'icono' => '',
                'padre_id' => $padreTramites->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'TUPA',
                'url'   => 'tupa/',
                'ruta'   => 'tramites.tupa',
                'slug' => 'tramites-tupa',
                'icono' => '',
                'padre_id' => $padreTramites->id,
                'orden' => 2,
            ],
        ];

        // Crear los submenús
        foreach ($submenusTramites as $submenu) {
            Nav::firstOrCreate($submenu);
        }

        // Crear el menú padre "Servicios"
        $padreServicios = Nav::firstOrCreate([
            'nombre' => 'Servicios',
            'url' => '#',
            'ruta' => 'servicios',
            'slug' => 'servicios',
            'icono' => '',
            'padre_id' => null,
            'orden' => 7,
        ]);

        // Submenús de "Servicios"
        $submenusServicios = [
            [
                'nombre' => 'Biblioteca IES Huando',
                'url'   => 'biblioteca-ies-huando/',
                'ruta'   => 'servicios.biblioteca-ies-huando',
                'slug' => 'servicios-biblioteca-ies-huando',
                'icono' => '',
                'padre_id' => $padreServicios->id,
                'orden' => 1,
            ],
            [
                'nombre' => 'Biblioteca virtual',
                'url'   => 'biblioteca-virtual-huando/',
                'ruta'   => 'servicios.biblioteca-virtual',
                'slug' => 'servicios-biblioteca-virtual',
                'icono' => '',
                'padre_id' => $padreServicios->id,
                'orden' => 2,
            ],
            [
                'nombre' => 'Aula virtual',
                'url'   => 'aula-virtual/',
                'ruta'   => 'servicios.aula-virtual',
                'slug' => 'servicios-aula-virtual',
                'icono' => '',
                'padre_id' => $padreServicios->id,
                'orden' => 3,
            ],
            [
                'nombre' => 'Bolsa laboral',
                'url'   => 'bolsa-laboral/',
                'ruta'   => 'servicios.bolsa-laboral',
                'slug' => 'servicios-bolsa-laboral',
                'icono' => '',
                'padre_id' => $padreServicios->id,
                'orden' => 4,
            ],
            [
                'nombre' => 'Servicios complementarios',
                'url'   => 'servicios-complementarios/',
                'ruta'   => 'servicios.servicios-complementarios',
                'slug' => 'servicios-servicios-complementarios',
                'icono' => '',
                'padre_id' => $padreServicios->id,
                'orden' => 5,
            ],
        ];

        // Crear submenús de "Servicios"
        foreach ($submenusServicios as $submenu) {
            Nav::firstOrCreate($submenu);
        }



    }
}
