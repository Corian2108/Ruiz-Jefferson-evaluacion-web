<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::latest()->paginate();
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());

        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    public function insert(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->save();
        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json([
            'message' => 'Succes'
        ]);
    }
}
