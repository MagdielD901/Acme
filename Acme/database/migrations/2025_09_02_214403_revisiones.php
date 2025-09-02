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
        Schema::create('revisiones', function (Blueprint $table) {
            $table->id('idRevision');
            $table->unsignedBigInteger('idPlano');
            $table->unsignedBigInteger('revisado_por'); // idUsuario
            $table->unsignedBigInteger('idArquitecto');
            $table->date('fecha_revision')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
        
            // Foreign keys
            $table->foreign('idPlano')->references('idPlano')->on('planos')->onDelete('cascade');
            $table->foreign('revisado_por')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idArquitecto')->references('idArquitecto')->on('arquitectos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisiones');
    }
};
