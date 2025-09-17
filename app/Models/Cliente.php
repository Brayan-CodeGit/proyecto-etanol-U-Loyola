<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nombre', 'contacto', 'direccion'];

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }
}