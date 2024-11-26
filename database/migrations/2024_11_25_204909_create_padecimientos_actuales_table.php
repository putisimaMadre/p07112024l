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
        Schema::create('padecimientos_actuales', function (Blueprint $table) {
            $table->id();
            $table->string("preguntaUno")->nullable();
            $table->string("preguntaUnoS")->nullable();
            $table->boolean("preguntaDos")->nullable();
            $table->string("preguntaDosS")->nullable();
            $table->boolean("preguntaTres")->nullable();
            $table->string("preguntaTresS")->nullable();
            $table->boolean("preguntaCuatro")->nullable();
            $table->string("preguntaCuatroS")->nullable();
            $table->boolean("preguntaCinco")->nullable();
            $table->string("preguntaCincoS")->nullable();
            $table->boolean("preguntaSeis")->nullable();
            $table->string("preguntaSeisS")->nullable();
            $table->boolean("preguntaSiete")->nullable();
            $table->string("preguntaSieteS")->nullable();
            $table->boolean("preguntaOcho")->nullable();
            $table->string("preguntaOchoS")->nullable();
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
        Schema::dropIfExists('padecimientos_actuales');
    }
};
