<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    protected $table='organizacion';
    protected $fillable = ['ruc', 'razon_social', 'titulo', 'slogan', 'descripcion', 'director', 'direccion', 'email', 'telefono', 'telefono2',
    'url_web', 'quienes_somos', 'vision', 'mision', 'logo', 'icono'];


}
