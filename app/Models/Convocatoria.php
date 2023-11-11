<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;
    protected $fillable=['titulo', 'descripcion', 'tipo_convocatoria_id', 'etapa_convocatoria_id', 'estado', 'es_activo', 'fecha_inicio', 'fecha_fin'];

}
