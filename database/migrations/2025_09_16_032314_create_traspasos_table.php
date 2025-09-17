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
       Schema::create('traspasos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('producto_semielaborado_id')->constrained('productos_semielaborados')->onDelete('cascade');
    $table->enum('etapa_origen', ['Hidrólisis', 'Fermentación', 'Destilación']);
    $table->enum('etapa_destino', ['Hidrólisis', 'Fermentación', 'Destilación']);
    $table->decimal('cantidad', 10, 2);
    $table->date('fecha');
    $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traspasos');
    }
};
