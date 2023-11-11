<?php

namespace App\Http\Controllers;

use App\Http\Requests\Popup\StorePopupRequest;
use App\Http\Requests\Popup\UpdatePopupRequest;
use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function store(StorePopupRequest $request)
    {
        $request->validated();

        $popup = Popup::create([
            'titulo'        => $request->titulo,
            'url'           => $request->url,
            'icono'         => $request->icono,
            'colorfondo'    => $request->colorfondo,
        ]);


        return response()->json([
            'ok' => 1,
            'mensaje' => 'Popup Registrado satisfactoriamente'
        ],200);
    }
    public function show(Request $request)
    {
        $popup = Popup::where('id', $request->id)->first();
        return $popup;
    }
    public function update(UpdatePopupRequest $request)
    {
        $request->validated();
        $popup = Popup::where('id',$request->id)->first();
        $popup->titulo = $request->titulo;
        $popup->url = $request->url;
        $popup->icono = $request->icono;
        $popup->colorfondo = $request->colorfondo;
        $popup->save();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Popup modificado satisfactoriamente'
        ],200);
    }
    public function destroy(Request $request)
    {
        $popup = Popup::where('id', $request->id)->first();
        $popup->delete();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Popup eliminado satisfactoriamente'
        ],200);
    }
    public function todos(){
        $popups = Popup::get();
        return $popups;
    }
    public function listar(Request $request){
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return Popup::where(function ($query) use ($buscar) {
            $query->whereRaw('UPPER(titulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(url) LIKE ?', ['%' . strtoupper($buscar) . '%']);
        })
        ->paginate($paginacion);
    }
}
