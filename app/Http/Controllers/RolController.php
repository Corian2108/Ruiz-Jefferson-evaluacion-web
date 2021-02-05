<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        return Rol::latest()->paginate();
    }

    public function store(Request $request)
    {
        $rol = Rol::create($request->all());

        return response()->json($rol, 201);
    }

    public function show(Rol $rol)
    {
        return $rol;
    }

    public function insert(Request $request)
    {
        $rol = new Rol();
        $rol->name = $request->input('name');
        $rol->save();
        return response()->json($rol);
    }

    public function destroy(Rol $rol)
    {
        $rol->delete();
        return response()->json([
            'message' => 'Succes'
        ]);
    }
}
