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
        Schema::create('patologias', function (Blueprint $table) {
            //ESTE ES UN CATALOGO POR ESO NO LLEVA RELACION CON DATOS GENERALES
            $table->id();
            $table->string("patologias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patalogias');
    }
};
