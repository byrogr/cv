<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "in_inventario";

    protected $fillable = [
        'servicio_id',
        'estado',
        'fecha',
        'cupos'
    ];

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id');
    }

    public function scopeFecha($query, $fecha)
    {
        if ($fecha) {
            return $query->where('fecha', Carbon::parse($fecha));
        }

    }
}
