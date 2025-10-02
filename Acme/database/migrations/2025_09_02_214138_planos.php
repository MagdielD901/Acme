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
        Schema::create('planos', function (Blueprint $table) {
            $table->id('idPlano');
            $table->unsignedBigInteger('idProyecto');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->date('fecha_creacion')->nullable();
           $table->string('hoja')->nullable();
            $table->timestamps();
        
            // Foreign key
          //  $table->foreign('idProyecto')->references('idProyecto')->on('proyectos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};
