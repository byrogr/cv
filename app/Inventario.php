<?php

namespace App;

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
}
