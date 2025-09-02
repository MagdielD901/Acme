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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('idProyecto');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('idCliente');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->timestamps();
        
            // Foreign key
            $table->foreign('idCliente')->references('idCliente')->on('clientes')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
