<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'ub_departamento';

    protected $fillable = [
        'nombre'
    ];

    // Binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relations
    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
}
