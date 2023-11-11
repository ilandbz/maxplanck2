<?php

namespace App\Http\Controllers;

use App\Http\Requests\Enlace\StoreEnlaceRequest;
use App\Models\Enlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class EnlaceController extends Controller
{
    public function store(StoreEnlaceRequest $request)
    {
        $request->validated();
        $imagen= $request->file('imagen');
        $nombre_archivo = date('YmdHis') . '_' . uniqid() . '.' . $imagen->getClientOriginalExtension();
        Storage::disk('enlaces')->put($nombre_archivo,File::get($imagen));
        $enlace = Enlace::create([
            'titulo'        => $request->titulo,
            'nombreImagen'  => $nombre_archivo,
            'link'          => $request->link,
        ]);

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Enlace Registrado satisfactoriamente'
        ],200);
    }
    public function show(Request $request)
    {
        $enlace = Enlace::where('id', $request->id)->first();
        return $enlace;
    }
    public function update(Request $request)
    {
        $enlace = Enlace::findOrFail($request->id);
        $reglasComunes = [
            'titulo' => 'required',
        ];
        $mensajesComunes = [
            'titulo.required' => 'El Titulo es obligatorio.',
        ];
        if ($request->hasFile('imagen')) {
            $reglasArchivo = [
                'archivo' => 'required|file|max:2000|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,jpg,jpeg,png,gif,webp',
            ];
            $mensajesArchivo = [
                'archivo.required' => 'La imagen es obligatorio.',
                'archivo.mimes' => 'La imagen debe ser solo de tipo: jpg, jpeg, png, gif, webp.',
                'archivo.file' => 'El archivo debe ser de tipo file.',
                'archivo.max' => 'El tamaño máximo permitido es de 2000 kilobytes.',
            ];
        
            $request->validate($reglasArchivo, $mensajesArchivo);
        
            if (Storage::disk('enlaces')->exists($enlace->nombrearchivo)) {
                Storage::disk('enlaces')->delete($enlace->nombrearchivo);
            }
        
            $file = $request->file('archivo');
            $nombre_archivo = $enlace->id. '.' . $file->getClientOriginalExtension();
            Storage::disk('enlaces')->put($nombre_archivo,File::get($file));
            $enlace->nombrearchivo = $nombre_archivo;

        }

        $request->validate($reglasComunes, $mensajesComunes);
        $enlace->titulo = $request->titulo;
        $enlace->link = $request->link;
        $enlace->save();
        
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Enlace modificado satisfactoriamente'
        ], 200);
    }
    public function destroy(Request $request)
    {
        $enlace = Enlace::where('id', $request->id)->first();
        $enlace->delete();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Enlace eliminado satisfactoriamente'
        ],200);
    }
    public function todos(){
        $enlaces = Enlace::get();
        return $enlaces;
    }
    public function listar(Request $request){
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return Enlace::where(function ($query) use ($buscar) {
            $query->whereRaw('UPPER(titulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(link) LIKE ?', ['%' . strtoupper($buscar) . '%']);
        })
        ->paginate($paginacion);
    }
}
