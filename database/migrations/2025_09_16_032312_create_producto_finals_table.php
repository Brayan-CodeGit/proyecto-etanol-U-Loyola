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
        Schema::create('producto_final', function (Blueprint $table) {
    $table->id();
    $table->string('nombre')->default('Bioetanol');
    $table->decimal('stock_actual', 10, 2);
    $table->string('ubicacion');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_finals');
    }
};
