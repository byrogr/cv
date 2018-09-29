<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function listado()
    {
        return Inventario::with(['servicios'])->get();
    }
}
