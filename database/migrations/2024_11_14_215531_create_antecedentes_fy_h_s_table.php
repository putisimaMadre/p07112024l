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
            $table->boolean("madre")->nullable();
            $table->boolean("abuelaM")->nullable();
            $table->boolean("abueloM")->nullable();
            $table->boolean("otrosM")->nullable();
            $table->boolean("padre")->nullable();
            $table->boolean("abuelaP")->nullable();
            $table->boolean("abueloP")->nullable();
            $table->boolean("hermanosP")->nullable();
            $table->boolean("otrosP")->nullable();
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
