<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traspaso extends Model
{
    protected $table = 'traspasos';

    protected $fillable = ['producto_semielaborado_id', 'etapa_origen', 'etapa_destino', 'cantidad', 'fecha', 'usuario_id'];

    public function productoSemielaborado()
    {
        return $this->belongsTo(ProductoSemielaborado::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function create()
{
    return view('traspasos.create', [
        'productos' => ProductoSemielaborado::all(),
        'usuarios' => Usuario::all()
    ]);
}

public function edit($id)
{
    $traspaso = Traspaso::findOrFail($id);
    return view('traspasos.edit', [
        'traspaso' => $traspaso,
        'productos' => ProductoSemielaborado::all(),
        'usuarios' => Usuario::all()
    ]);
}
}