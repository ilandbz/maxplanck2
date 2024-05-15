<?php

namespace App\Http\Controllers;

use App\Http\Requests\eventos\StoreEventoRequest;
use App\Http\Requests\eventos\UpdateEventoRequest;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function store(StoreEventoRequest $request)
    {
        $request->validated();

        $entrada = Evento::create([
            'titulo'        => $request->titulo,
            'subtitulo'     => $request->subtitulo,
            'lugar'         => $request->lugar,
            'fecha'         => $request->fecha,
            'imagen'        => $request->imagen,
            'contenido'     => $request->contenido
        ]);
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Evento Registrado satisfactoriamente'
        ],200);
    }
    public function show(Request $request)
    {
        $entrada = Evento::where('id', $request->id)->first();
        return $entrada;
    }
    public function update(UpdateEventoRequest $request)
    {
        $request->validated();
        $entrada = Evento::where('id',$request->id)->first();
        $entrada->titulo = $request->titulo;
        $entrada->subtitulo = $request->subtitulo;
        $entrada->lugar = $request->lugar;
        $entrada->fecha = $request->fecha;
        $entrada->imagen = $request->imagen;
        $entrada->contenido = $request->contenido;
        $entrada->save();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Evento modificado satisfactoriamente'
        ],200);
    }
    public function destroy(Request $request)
    {
        $entrada = Evento::where('id', $request->id)->first();
        $entrada->delete();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Evento eliminado satisfactoriamente'
        ],200);
    }
    public function todos(){
        $entradas = Evento::get();
        return $entradas;
    }
    public function listar(Request $request){
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;


        return Evento::where(function ($query) use ($buscar) {
            $query->whereRaw('UPPER(titulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(subtitulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ;

        })
        ->paginate($paginacion);
    }
}
