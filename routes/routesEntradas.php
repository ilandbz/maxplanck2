<?php
use App\Models\Entrada;
use App\Models\Nav;
use App\Models\Organizacion;
use App\Models\RedSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
$listaentradas = Entrada::get();

foreach($listaentradas as $pagina){
    Route::get('/'.$pagina->slug, function () use ($pagina){
        setlocale(LC_TIME, 'es_ES.utf8');
        $data['fechaActual'] = Carbon::now(); 
        $data['pagina'] = $pagina;
        $data['titulo'] = $pagina->titulo;
        $data['organizacion'] = Organizacion::first();
        $data['redessociales'] = RedSocial::get();
        $data['menus'] = Nav::with('children')->whereNull('padre_id')->get();
        return view('app', $data);
    })->name($pagina->ruta);
}
