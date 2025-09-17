<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = ['nombre', 'contacto', 'direccion'];

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }
}