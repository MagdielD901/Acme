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
        Schema::create('archivos', function (Blueprint $table) {
            $table->id('idArchivo');
            $table->unsignedBigInteger('idPlano');
            $table->string('nombre', 100);
            $table->string('tipo', 80);
            $table->text('ruta');
            $table->timestamps();
        
            // Foreign key
            $table->foreign('idPlano')->references('idPlano')->on('planos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
