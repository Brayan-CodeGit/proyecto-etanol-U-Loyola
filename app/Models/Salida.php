<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table = 'salidas';

    protected $fillable = ['producto_final_id', 'cantidad', 'fecha', 'cliente_id', 'usuario_id'];

    public function productoFinal()
    {
        return $this->belongsTo(ProductoFinal::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}