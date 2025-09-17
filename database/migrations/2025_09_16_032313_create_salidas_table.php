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
        Schema::create('salidas', function (Blueprint $table) {
    $table->id();
    $table->foreignId('producto_final_id')->constrained('producto_final')->onDelete('cascade');
    $table->decimal('cantidad', 10, 2);
    $table->date('fecha');
    $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
    $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
