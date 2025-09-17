<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoFinal extends Model
{
    protected $table = 'producto_final';

    protected $fillable = ['nombre', 'stock_actual', 'ubicacion'];

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }
}