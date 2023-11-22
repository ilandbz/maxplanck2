<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Directorio;
use App\Models\Enlace;
use App\Models\Organizacion;
use App\Models\Menu;
use App\Models\Nav;
use App\Models\Noticia;
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
        // setlocale(LC_TIME, 'es_ES.utf8');
        // //App::setLocale('es');
        // Carbon::setLocale('es');
        // date_default_timezone_set('America/Lima');
    }
    public function __invoke(){
        $data['fechaActual'] = Carbon::now(); 
        $fechaActual = Carbon::now('D');
        return $fechaActual->formatLocalized('%A %d %B %Y');
        // $data['sliders']=Slider::where('es_activo', 1)->get();
        // $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        // $data['organizacion'] = Organizacion::first();
        // $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        // $data['enlaces'] = Enlace::get();
        // $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        // $data['noticias']=Noticia::with('imagen')->latest()->limit(3)->get();
        // return view('app', $data);
    }
    public function historia(){
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
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
        $data['fechaActual'] = Carbon::now(); 
        $data['alcalde']=Directorio::with('cargo:id,nombre')->where('cargo_id', Cargo::where('nombre', 'Alcalde')->value('id'))->first();
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='ALCALDE';
        return view('paginas.municipalidadalcalde', $data);    
    }
    
    public function concejoMunicipal(){
        $data['fechaActual'] = Carbon::now(); 
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['regidores']=Directorio::with('cargo:id,nombre')->where('cargo_id', Cargo::where('nombre', 'Regidor')->value('id'))->get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='CONCEJO MUNICIPAL';
        return view('paginas.concejomunipal', $data);    
    }
    
    public function functionariosMunicipales(){
        $data['fechaActual'] = Carbon::now(); 
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();

        $cargosExcluidos = Cargo::whereIn('nombre', ['Alcalde', 'Regidor'])->pluck('id');
        $data['funcionarios'] = Directorio::with('cargo:id,nombre')
            ->whereNotIn('cargo_id', $cargosExcluidos)
            ->get();
        $data['redessociales'] = RedSocial::get();
        $data['titulo']='FUNCIONARIO MUNICIPAL';
        return view('paginas.funcionariosmunicipales', $data);    
    }
    public function prueba(){
        $data['fechaActual'] = Carbon::now(); 
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
        $data['titulo']='NOTICIAS';
        $data['sliders']=Slider::where('es_activo', 1)->get();
        $data['secciones']=SeccionesPrincipal::where('es_activo', 1)->get();
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::where('url', '!=', '#')->get();
        $data['enlaces'] = Enlace::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        $data['noticia'] = Noticia::with('imagenes')->where('slug', $request->s)->first();
        return view('paginas.noticia', $data);
    }




}
