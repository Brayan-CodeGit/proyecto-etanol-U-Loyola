<?php

namespace App\Http\Controllers;

use App\Models\MateriaPrima;
use Illuminate\Http\Request;

class MateriaPrimaController extends Controller
{
    public function index()
    {
        return MateriaPrima::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'unidad_medida' => 'required',
            'stock_actual' => 'required|numeric',
            'ubicacion' => 'required',
        ]);

        return MateriaPrima::create($request->all());
    }

    /* public function show($id)
    {
        return MateriaPrima::findOrFail($id);
    } */

    public function update(Request $request, $id)
    {
        $materia = MateriaPrima::findOrFail($id);
        $materia->update($request->all());
        return $materia;
    }

    public function destroy($id)
    {
        MateriaPrima::destroy($id);
        return response()->json(['message' => 'Materia prima eliminada']);
    }
    public function edit($id)
{
    $materia = MateriaPrima::findOrFail($id);
    return view('materias-primas.edit', compact('materia'));
}

public function show($id)
{
    $materia = MateriaPrima::findOrFail($id);
    return view('materias-primas.show', compact('materia'));
}
}