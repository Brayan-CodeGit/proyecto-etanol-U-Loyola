<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoSemielaborado extends Model
{
    protected $table = 'productos_semielaborados';

    protected $fillable = ['nombre', 'etapa', 'stock_actual', 'ubicacion'];

    public function traspasos()
    {
        return $this->hasMany(Traspaso::class);
    }
}