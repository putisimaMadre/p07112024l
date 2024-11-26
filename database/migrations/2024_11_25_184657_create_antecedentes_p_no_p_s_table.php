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
        Schema::create('antecedentes_p_no_p_s', function (Blueprint $table) {
            $table->id();
            $table->boolean("alcohol")->nullable();
            $table->boolean("tabaquismo")->nullable();
            $table->boolean("drogas")->nullable();
            $table->string("otros")->nullable();
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
        Schema::dropIfExists('antecedentes_p_no_p_s');
    }
};
