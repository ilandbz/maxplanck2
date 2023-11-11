<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comunicado\StoreComunicadoRequest;
use App\Models\Comunicado;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class ComunicadoController extends Controller
{
    public function store(StoreComunicadoRequest $request)
    {
        $request->validated();
        $imagen= $request->file('imagen');
        $nombre_archivo = date('YmdHis') . '_' . uniqid() . '.' . $imagen->getClientOriginalExtension();
        Storage::disk('comunicados')->put($nombre_archivo,File::get($imagen));

        $comunicado = Comunicado::create([
            'titulo'        => $request->titulo,
            'nombreimagen'  => $request->nombre_archivo,
            'link'          => $request->link,
        ]);

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Comunicado Registrado satisfactoriamente'
        ],200);
    }
    public function show(Request $request)
    {
        $comunicado = Comunicado::where('id', $request->id)->first();
        return $comunicado;
    }
    public function update(Request $request)
    {
        $comunicado = Comunicado::findOrFail($request->id);
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
        
            if (Storage::disk('comunicados')->exists($comunicado->nombrearchivo)) {
                Storage::disk('comunicados')->delete($comunicado->nombrearchivo);
            }
        
            $file = $request->file('archivo');
            $nombre_archivo = $comunicado->id. '.' . $file->getClientOriginalExtension();
            Storage::disk('comunicados')->put($nombre_archivo,File::get($file));
            $comunicado->nombrearchivo = $nombre_archivo;

        }

        $request->validate($reglasComunes, $mensajesComunes);
        $comunicado->titulo = $request->titulo;
        $comunicado->link = $request->link;
        $comunicado->save();
        
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Comunicado modificado satisfactoriamente'
        ], 200);
    }
    public function destroy(Request $request)
    {
        $comunicado = Comunicado::where('id', $request->id)->first();
        $comunicado->delete();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Comunicado eliminado satisfactoriamente'
        ],200);
    }
    public function todos(){
        $comunicados = Comunicado::get();
        return $comunicados;
    }
    public function listar(Request $request){
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return Comunicado::where(function ($query) use ($buscar) {
            $query->whereRaw('UPPER(titulo) LIKE ?', ['%' . strtoupper($buscar) . '%'])
                  ->orWhereRaw('UPPER(link) LIKE ?', ['%' . strtoupper($buscar) . '%']);
        })
        ->paginate($paginacion);
    }
}
