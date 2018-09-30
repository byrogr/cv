<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Inventario;
use App\Servicio;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function home()
    {
        $departamentos = Departamento::all();
        return view('home', compact('departamentos'));
    }

    public function list(Request $request, Departamento $departamento)
    {
        $order = $request->order ?: 'nombre';
        $tours = Inventario::with(['servicios'], function($query) use ($departamento, $order) {
            $query->where('departamento_id', $departamento->id);
            //$query->orderBy($order, 'DESC');
        })->get();
        return view('list', compact('tours', 'departamento'));
    }

    public function detail(Departamento $departamento, Servicio $servicio)
    {
        return view('detail', compact('servicio'));
    }
}
