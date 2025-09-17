<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingresos';

    protected $fillable = ['materia_prima_id', 'cantidad', 'fecha', 'proveedor_id', 'usuario_id'];

    public function materiaPrima()
    {
        return $this->belongsTo(MateriaPrima::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}