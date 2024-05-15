<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Comunicado;
use App\Models\Directorio;
use App\Models\Enlace;
use App\Models\Evento;
use App\Models\Organizacion;
use App\Models\Menu;
use App\Models\Nav;
use App\Models\Noticia;
use App\Models\Popup;
use App\Models\RedSocial;
use App\Models\SeccionesPrincipal;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function __construct()
    {
        setlocale(LC_TIME, 'es_ES.utf8');
        App::setLocale('es');
        Carbon::setLocale('es');
        date_default_timezone_set('America/Lima');
    }
    public function __invoke(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['noticias']=Noticia::with('imagen')->latest()->limit(3)->get();
        $data['comunicados']=Comunicado::latest()->limit(8)->get();
        $data['popup'] = Popup::where('es_activo', 1)->latest()->first();
        $data['eventos']=Evento::latest()->limit(4)->get();
        return view('app', $data);
    }
    public function historia(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['enlaces'] = Enlace::get();
        $data['titulo']='NUESTRA HISTORIA';
        $data['pagina']='paginas.historia';
        return view('paginas.historia', $data);   
    }
    public function turismo(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['enlaces'] = Enlace::get();
        $data['titulo']='NUESTRO TURISMO';
        $data['pagina']='paginas.turismo';
        return view('paginas.turismo', $data);   
    } 

    public function informacionDemografica(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='INFORMACION DEMOGRAFICA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.informacion-demografica', $data);
    }
    public function quienessomos(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['enlaces'] = Enlace::get();
        $data['titulo']='QUIENES SOMOS';
        $data['pagina']='paginas.quienessomos';
        return view('paginas.quienessomos', $data);    
    }
    public function misionvision(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['enlaces'] = Enlace::get();
        $data['titulo']='MISION / VISION';
        $data['pagina']='paginas.misionvision';
        return view('paginas.misionvision', $data); 
    }

    public function nosotros(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='NOSOTROS';
        $data['page']='paginas.nosotros';
        return view('app', $data);    
    }

    public function municipalidadAlcalde(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['alcalde']=Directorio::with(['cargo:id,nombre','area:id,nombre'])->where('cargo_id', Cargo::where('nombre', 'ALCALDE PROVINCIAL DE AMBO')->value('id'))->first();
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='ALCALDE';
        return view('paginas.municipalidadalcalde', $data);    
    }
    public function contactenos(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['alcalde']=Directorio::with('cargo:id,nombre')->where('cargo_id', Cargo::where('nombre', 'Alcalde')->value('id'))->first();
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['titulo']='Contáctenos';
        return view('paginas.contactenos', $data);            
    }
    public function concejoMunicipal(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['regidores']=Directorio::with('cargo:id,nombre')->where('cargo_id', Cargo::where('nombre', 'Regidor')->value('id'))->get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='CONCEJO MUNICIPAL';
        return view('paginas.concejomunipal', $data);    
    }

    public function prueba(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['titulo']='Prueba';
        $data['enlaces'] = Enlace::get();
        $data['paginaprueba']='paginas.prueba';
        return view('app', $data);
    }
    public function noticia(Request $request){
        $fechaActual = Carbon::now();
        $data['titulo']='NOTICIAS';
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['noticia'] = Noticia::with('imagenes')->where('slug', $request->s)->first();
        return view('paginas.noticia', $data);
    }
    public function enfermeriaTecnica(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='ENFERMERIA TECNICA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.enfermeria-tecnica', $data);       
    }
    public function produccionAgropecuaria(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='PRODUCCION AGROPECUARIA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.produccion-agropecuaria', $data);       
    }
    public function mecanicaAutomotriz(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='MECANICA AUTOMOTRIZ';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.mecanica-automotriz', $data);       
    }
    public function gerenciaOficinaPlaneamientoPresupuesto(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='OFICINA GENERAL DE PLANEAMIENTO Y PRESUPUESTO';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.oficina-planeamiento', $data);       
    }
    public function gerenciaAsesoriaLegal(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA DE ASESORIA LEGAL';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.asesoria-legal', $data);       
    }

    public function planaJerarquica(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='PLANA JERARQUICA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $cargosExcluidos = Cargo::whereIn('nombre', ['Alcalde', 'Regidor'])->pluck('id');
        $data['personales'] = Directorio::with(['cargo:id,nombre', 'area:id,nombre'])
            ->whereNotIn('cargo_id', $cargosExcluidos)
            ->get();
        $data['redessociales'] = RedSocial::get();
        return view('paginas.plana-jerarquica', $data);          
    }

    public function gerenciaTerritorialInfraestructura(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA TERRITORIAL E INFRAESTRUCTURA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.gerencia-territorial-infraestructura', $data);       
    }    
    public function gestionAmbiental(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GESTION AMBIENTAL Y RECURSOS NATURALES';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.gestion-ambiental', $data);       
    }
    public function desarrolloSocial(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='DESARROLLO SOCIAL';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.desarrollo-social', $data);          
    }
    public function desarrolloEconomico(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='DESARROLLO ECONOMICO';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.desarrollo-economico', $data);       
    }
    //subgerencias
    public function obrasPublicas(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA TERRITORIAL E INFRAESTRUCTURA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.obraspublicas', $data);       
    }  
    public function estudiosProyectos(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA TERRITORIAL E INFRAESTRUCTURA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.subgerencia-estudios', $data);       
    }  
    public function acondicionamientoTerritorial(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA TERRITORIAL E INFRAESTRUCTURA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.territorial-urbano', $data);       
    }      
    public function riesgoDesastre(){
        $fechaActual = Carbon::now();
        $data['fechaActual'] = $fechaActual->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
        $data['titulo']='GERENCIA TERRITORIAL E INFRAESTRUCTURA';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('paginas.gestion-riesgo', $data);       
    }         
    public function obtenerDetDirectorio(Request $request){
        $directorio = Directorio::where('id', $request->id)->first();
        return $directorio;
    }
    


}
