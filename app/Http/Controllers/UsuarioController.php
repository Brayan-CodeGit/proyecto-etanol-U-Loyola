<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:usuarios',
            'contraseña' => 'required',
            'rol' => 'required|in:Administrador,Operador,Supervisor',
        ]);

        return Usuario::create($request->all());
    }

  /*   public function show($id)
    {
        return Usuario::findOrFail($id);
    } */

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return $usuario;
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return response()->json(['message' => 'Usuario eliminado']);
    }
    public function edit($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.edit', compact('usuario'));
}

public function show($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.show', compact('usuario'));
}
}