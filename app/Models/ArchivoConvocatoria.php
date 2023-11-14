<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoConvocatoria extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'link', 'convocatoria_id'];

}
