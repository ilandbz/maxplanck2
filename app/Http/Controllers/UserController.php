<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function actualizarperfil(Request $request){
        $request->validated();
        $usuario = User::find(Auth::user()->id);
        $usuario->username = $request->username;
        $usuario->save();

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Registro modificado satisfactoriamente'
        ],200);
    }

    public function show(Request $request){
        $user = User::with('personal:id,nombres,apellido_paterno,apellido_materno,numero_dni,telefono,celular,direccion,email')
        ->where('id', $request->id)->first();
        return $user;
    }
    public function mostrarDatoUsuario(Request $request): User
    {
        $menu = [];
        $usuario=User::with('role:id,nombre')->where('id',$request->id)->first();
        $menus = $usuario->obtenerMenus($usuario->role->id)->toArray();
        array_merge($menus,$menu);
        $usuario->menus = $menus;

        return $usuario;
    }

    public function habilitados(Request $request)
    {
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return User::with([
            'personal:id,numero_dni,apellido_paterno,apellido_materno,nombres,sexo'
        ])
        ->where(function($query) use($buscar) {
            $query->whereRaw("upper(username) like ?", ['%'.strtoupper($buscar).'%'])
                ->orWhereHas('personal', function($q) use($buscar){
                    $q->whereRaw('upper(numero_dni) like ?', ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(concat(apellido_paterno,' ',apellido_materno)) like ?", ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(nombres) like ?", ['%'.strtoupper($buscar).'%']);
                });
        })
        ->paginate($paginacion);
    }
    public function eliminados(Request $request)
    {
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return User::with([
            'personal:id,numero_dni,apellido_paterno,apellido_materno,nombres,sexo'
        ])
        ->where(function($query) use($buscar) {
            $query->whereRaw("upper(username) like ?", ['%'.strtoupper($buscar).'%'])
                ->orWhereHas('personal', function($q) use($buscar){
                    $q->whereRaw('upper(numero_dni) like ?', ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(concat(apellido_paterno,' ',apellido_materno)) like ?", ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(nombres) like ?", ['%'.strtoupper($buscar).'%']);
                });
        })->onlyTrashed()
        ->paginate($paginacion);
    }
    public function todos(Request $request)
    {
        $buscar = mb_strtoupper($request->buscar);
        $paginacion = $request->paginacion;
        return User::with([
            'personal:id,numero_dni,apellido_paterno,apellido_materno,nombres,sexo'
        ])
        ->where(function($query) use($buscar) {
            $query->whereRaw("upper(username) like ?", ['%'.strtoupper($buscar).'%'])
                ->orWhereHas('personal', function($q) use($buscar){
                    $q->whereRaw('upper(numero_dni) like ?', ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(concat(apellido_paterno,' ',apellido_materno)) like ?", ['%'.strtoupper($buscar).'%'])
                        ->orWhereRaw("upper(nombres) like ?", ['%'.strtoupper($buscar).'%']);
                });
        })->withTrashed()
        ->paginate($paginacion);
    }
}
