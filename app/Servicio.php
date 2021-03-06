<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "se_servicio";

    public function inventario()
    {
        return $this->belongsTo(Inventario::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function scopeRank($query, $mostRank)
    {
        if ($mostRank) {
            return $query->where('rank', '>=', 4);
        }
    }

    public function scopeProvincia($query, $provincia)
    {
        if ($provincia) {
            return $query->where('provincia', 'LIKE', "%$provincia%");
        }
    }
}
