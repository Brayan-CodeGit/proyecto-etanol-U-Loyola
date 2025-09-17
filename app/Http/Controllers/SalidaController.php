<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    public function index()
    {
        return Salida::with(['productoFinal', 'cliente', 'usuario'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_final_id' => 'required|exists:producto_final,id',
            'cantidad' => 'required|numeric',
            'fecha' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        return Salida::create($request->all());
    }

    public function show($id)
    {
        return Salida::with(['productoFinal', 'cliente', 'usuario'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $salida = Salida::findOrFail($id);
        $salida->update($request->all());
        return $salida;
    }

    public function destroy($id)
    {
        Salida::destroy($id);
        return response()->json(['message' => 'Salida eliminada']);
    }
    public function create()
{
    return view('salidas.create', [
        'productos' => ProductoFinal::all(),
        'clientes' => Cliente::all(),
        'usuarios' => Usuario::all()
    ]);
}

public function edit($id)
{
    $salida = Salida::findOrFail($id);
    return view('salidas.edit', [
        'salida' => $salida,
        'productos' => ProductoFinal::all(),
        'clientes' => Cliente::all(),
        'usuarios' => Usuario::all()
    ]);
}
}