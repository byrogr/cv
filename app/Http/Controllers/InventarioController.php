<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function home()
    {
        $servicios = Inventario::with(['servicios'])->get();
        return view('home', compact('servicios'));
    }

    public function listado()
    {
        //
    }
}
