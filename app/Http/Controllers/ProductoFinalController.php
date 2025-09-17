<?php

namespace App\Http\Controllers;

use App\Models\ProductoFinal;
use Illuminate\Http\Request;

class ProductoFinalController extends Controller
{
    public function index()
    {
        return ProductoFinal::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'stock_actual' => 'required|numeric',
            'ubicacion' => 'required',
        ]);

        return ProductoFinal::create($request->all());
    }

    /* public function show($id)
    {
        return ProductoFinal::findOrFail($id);
    } */

    public function update(Request $request, $id)
    {
        $producto = ProductoFinal::findOrFail($id);
        $producto->update($request->all());
        return $producto;
    }

    public function destroy($id)
    {
        ProductoFinal::destroy($id);
        return response()->json(['message' => 'Producto final eliminado']);
    }
    public function edit($id)
{
    $producto = ProductoFinal::findOrFail($id);
    return view('productos-finales.edit', compact('producto'));
}

public function show($id)
{
    $producto = ProductoFinal::findOrFail($id);
    return view('productos-finales.show', compact('producto'));
}
}