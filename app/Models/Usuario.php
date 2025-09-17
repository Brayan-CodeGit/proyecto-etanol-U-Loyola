<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'correo', 'contraseña', 'rol'];

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }

    public function traspasos()
    {
        return $this->hasMany(Traspaso::class);
    }
}