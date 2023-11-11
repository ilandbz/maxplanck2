<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(StoreSliderRequest $request)
    {
        $request->validated();
        $slider = Slider::create([
            'titulo'            => $request->titulo,
            'subtitulo'         => $request->subtitulo,
            'nombrebutton1'     => $request->nombrebutton1,
            'nombrebutton2'     => $request->nombrebutton2,
            'link1'             => $request->link1,
            'link2'             => $request->link2,
            'nombreImagen'      => $request->nombreImagen, 
        ]);
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Slider Registrado satisfactoriamente'
        ],200);
    }
    public function show(Request $request)
    {
        $slider = Slider::where('id', $request->id)->first();
        return $slider;
    }
    public function update(UpdateSliderRequest $request)
    {
        $request->validated();
        $slider = Slider::where('id',$request->id)->first();
        $slider->titulo = $request->titulo;
        $slider->subtitulo = $request->subtitulo;
        $slider->nombrebutton1 = $request->nombrebutton1;
        $slider->nombrebutton2 = $request->nombrebutton2;
        $slider->link1 = $request->link1;
        $slider->link2 = $request->link2;
        $slider->nombreImagen = $request->nombreImagen;
        $slider->save();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Slider modificado satisfactoriamente'
        ],200);
    }
    public function destroy(Request $request)
    {
        $slider = Slider::where('id', $request->id)->first();
        $slider->delete();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Slider eliminado satisfactoriamente'
        ],200);
    }
    public function todos(){
        $sliders = Slider::get();
        return $sliders;
    }
    public function listar(Request $request){
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return Slider::where(function ($query) use ($buscar) {
            $query->whereRaw('UPPER(titulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(subtitulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(link1) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(link2) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ;
        })
        ->paginate($paginacion);
    }
}
