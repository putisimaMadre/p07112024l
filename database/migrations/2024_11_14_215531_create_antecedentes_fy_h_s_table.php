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
        Schema::create('antecedentes_fy_h_s', function (Blueprint $table) {
            $table->id();
            $table->integer("madre")->nullable();
            $table->integer("abuelaM")->nullable();
            $table->integer("abueloM")->nullable();
            $table->integer("otrosM")->nullable();
            $table->integer("padre")->nullable();
            $table->integer("abuelaP")->nullable();
            $table->integer("abueloP")->nullable();
            $table->integer("hermanosP")->nullable();
            $table->integer("otrosP")->nullable();
            $table->unsignedBigInteger("idPatologias");
            $table->foreign("idPatologias")->references("id")->on("patologias");
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
        Schema::dropIfExists('antecedentes_fy_h_s');
    }
};
