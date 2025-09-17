<?php

namespace App\Http\Controllers;

use App\Models\ProductoSemielaborado;
use Illuminate\Http\Request;

class ProductoSemielaboradoController extends Controller
{
    public function index()
    {
        return ProductoSemielaborado::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'etapa' => 'required|in:Hidrólisis,Fermentación,Destilación',
            'stock_actual' => 'required|numeric',
            'ubicacion' => 'required',
        ]);

        return ProductoSemielaborado::create($request->all());
    }

    /* public function show($id)
    {
        return ProductoSemielaborado::findOrFail($id);
    } */

    public function update(Request $request, $id)
    {
        $producto = ProductoSemielaborado::findOrFail($id);
        $producto->update($request->all());
        return $producto;
    }

    public function destroy($id)
    {
        ProductoSemielaborado::destroy($id);
        return response()->json(['message' => 'Producto semielaborado eliminado']);
    }
    public function edit($id)
{
    $producto = ProductoSemielaborado::findOrFail($id);
    return view('productos-semielaborados.edit', compact('producto'));
}

public function show($id)
{
    $producto = ProductoSemielaborado::findOrFail($id);
    return view('productos-semielaborados.show', compact('producto'));
}
}