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
        Schema::create('antecedentes_py_p_s', function (Blueprint $table) {
            $table->id();
            $table->string("si")->nullable();
            $table->string("no")->nullable();
            $table->string("fechaInicio")->nullable();
            $table->string("fechaFinal")->nullable();
            $table->unsignedBigInteger("idEnfermedad");
            $table->foreign("idEnfermedad")->references("id")->on("enfermedads");
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
        Schema::dropIfExists('antecedentes_py_p_s');
    }
};
