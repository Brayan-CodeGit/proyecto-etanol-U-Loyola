<?php

namespace App\Http\Controllers;

use App\Models\Traspaso;
use Illuminate\Http\Request;

class TraspasoController extends Controller
{
    public function index()
    {
        return Traspaso::with(['productoSemielaborado', 'usuario'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_semielaborado_id' => 'required|exists:productos_semielaborados,id',
            'etapa_origen' => 'required|in:Hidrólisis,Fermentación,Destilación',
            'etapa_destino' => 'required|in:Hidrólisis,Fermentación,Destilación',
            'cantidad' => 'required|numeric',
            'fecha' => 'required|date',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        return Traspaso::create($request->all());
    }

    public function show($id)
    {
        return Traspaso::with(['productoSemielaborado', 'usuario'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $traspaso = Traspaso::findOrFail($id);
        $traspaso->update($request->all());
        return $traspaso;
    }

    public function destroy($id)
    {
        Traspaso::destroy($id);
        return response()->json(['message' => 'Traspaso eliminado']);
    }
}