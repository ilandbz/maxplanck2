<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Popup extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'link'];

    /**
     * Get all of the imagenes for the Popup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imagenes(): HasMany
    {
        return $this->hasMany(ImagenPopup::class, 'popup_id');
    }
}
