<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index()
    {
        return Ingreso::with(['materiaPrima', 'proveedor', 'usuario'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'materia_prima_id' => 'required|exists:materias_primas,id',
            'cantidad' => 'required|numeric',
            'fecha' => 'required|date',
            'proveedor_id' => 'required|exists:proveedores,id',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        return Ingreso::create($request->all());
    }

    public function show($id)
    {
        return Ingreso::with(['materiaPrima', 'proveedor', 'usuario'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $ingreso->update($request->all());
        return $ingreso;
    }

    public function destroy($id)
    {
        Ingreso::destroy($id);
        return response()->json(['message' => 'Ingreso eliminado']);
    }
    public function create()
{
    return view('ingresos.create', [
        'materias' => MateriaPrima::all(),
        'proveedores' => Proveedor::all(),
        'usuarios' => Usuario::all()
    ]);
}

public function edit($id)
{
    $ingreso = Ingreso::findOrFail($id);
    return view('ingresos.edit', [
        'ingreso' => $ingreso,
        'materias' => MateriaPrima::all(),
        'proveedores' => Proveedor::all(),
        'usuarios' => Usuario::all()
    ]);
}

}