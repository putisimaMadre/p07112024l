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
        Schema::create('observacions', function (Blueprint $table) {
            $table->id();
            $table->string("observacionesPatologias")->nullable();
            $table->string("observacionesAntecedentesPyP")->nullable();
            $table->string("observacionesAnalisisFacial")->nullable();
            $table->string("observacionesEvaluacionClinica")->nullable();
            $table->string("planTratamientoYobjetivos")->nullable();
            $table->string("tecnicaAemplear")->nullable();
            $table->string("tiempoEstimadoYpronostico")->nullable();
            $table->unsignedBigInteger("idDatosGenerales")->unique();
            $table->foreign("idDatosGenerales")->references("id")->on("datos_generales");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacions');
    }
};
