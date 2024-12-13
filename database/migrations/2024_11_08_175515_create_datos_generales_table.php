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
        Schema::create('datos_generales', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("domicilio");
            $table->string("entidad");
            $table->string("ocupacion");
            $table->string("escolaridad");
            $table->string("fechaNacimiento");
            $table->integer("edad");
            $table->string("sexo");
            $table->string("lugarNacimiento");
            $table->string("estadoCivil");
            $table->boolean("alergico")->nullable();
            $table->boolean("status")->nullable();
            $table->string("observaciones")->nullable();
            $table->char("numeroTelefono", 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_generales');
    }
};
