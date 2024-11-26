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
        Schema::create('analisis_facials', function (Blueprint $table) {
            $table->id();
            $table->integer("patronFacial")->nullable();
            $table->integer("perfil")->nullable();
            $table->integer("asimetria")->nullable();
            $table->integer("alturaFE")->nullable();
            $table->integer("anchuraFE")->nullable();
            $table->integer("perfilMaxilar")->nullable();
            $table->integer("perfilMandibular")->nullable();
            $table->integer("surcoLM")->nullable();
            $table->integer("labiosEr")->nullable();
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
        Schema::dropIfExists('analisis_facials');
    }
};
