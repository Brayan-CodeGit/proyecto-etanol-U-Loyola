<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table = 'materias_primas';

    protected $fillable = ['nombre', 'unidad_medida', 'stock_actual', 'ubicacion'];

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }
}
