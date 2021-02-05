<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index()
    {
        return Configuracion::latest()->paginate();
    }

    public function store(Request $request)
    {
        $configuracion = Configuracion::create($request->all());

        return response()->json($configuracion, 201);
    }

    public function show(Configuracion $configuracion)
    {
        return $configuracion;
    }

    public function insert(Request $request)
    {
        $configuracion = new Configuracion();
        $configuracion->name = $request->input('name');
        $configuracion->save();
        return response()->json($configuracion);
    }

    public function destroy(Configuracion $configuracion)
    {
        $configuracion->delete();
        return response()->json([
            'message' => 'Succes'
        ]);
    }
}
