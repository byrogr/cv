<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function home()
    {
        $departamentos = Departamento::all();
        return view('home', compact('departamentos'));
    }

    public function list(Departamento $departamento)
    {
        $tours = Inventario::with(['servicios'], function($query) use ($departamento) {
            $query->where('departamento_id', $departamento->id);
        })->get();
//        dd($tours);
        return view('list', compact('tours'));
    }
}
