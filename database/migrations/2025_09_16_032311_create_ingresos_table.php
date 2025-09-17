<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingresos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('materia_prima_id')->constrained('materias_primas')->onDelete('cascade');
    $table->decimal('cantidad', 10, 2);
    $table->date('fecha');
    $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');
    $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
