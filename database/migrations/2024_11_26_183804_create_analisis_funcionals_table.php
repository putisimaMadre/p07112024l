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
        Schema::create('analisis_funcionals', function (Blueprint $table) {
            $table->id();
            $table->integer("actividadComisural")->nullable();
            $table->integer("actividadLingual")->nullable();
            $table->integer("labioSuperior")->nullable();
            $table->integer("labioInferior")->nullable();
            $table->integer("masetero")->nullable();
            $table->integer("mentoniano")->nullable();
            $table->integer("respiracion")->nullable();
            $table->integer("deglucion")->nullable();
            $table->unsignedBigInteger("idDatosGenerales");
            $table->foreign("idDatosGenerales")->references("id")->on("datos_generales");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_funcionals');
    }
};
