<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Convocatoria extends Model
{
    use HasFactory;
    protected $fillable=['titulo', 'descripcion', 'tipo_convocatoria_id', 'etapa_convocatoria_id', 'estado', 'es_activo', 'fecha_inicio', 'fecha_fin'];
    /**
     * Get the tipoconvocatoria that owns the Convocatoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoconvocatoria(): BelongsTo
    {
        return $this->belongsTo(TipoConvocatoria::class, 'tipo_convocatoria_id');
    }



    /**
     * Get the etapaconvocatoria that owns the Convocatoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etapaconvocatoria(): BelongsTo
    {
        return $this->belongsTo(EtapaConvocatoria::class, 'etapa_convocatoria_id');
    }
}
