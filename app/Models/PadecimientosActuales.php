<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PadecimientosActuales extends Model
{
    protected $fillable = [
    "id",
    "preguntaUno",
    "preguntaUnoS",
    "preguntaDos",
    "preguntaDosS",
    "preguntaTres",
    "preguntaTresS",
    "preguntaCuatro",
    "preguntaCuatroS",
    "preguntaCinco",
    "preguntaCincoS",
    "preguntaSeis",
    "preguntaSeisS",
    "preguntaSiete",
    "preguntaSieteS",
    "preguntaOcho",
    "preguntaOchoS",
    "idDatosGenerales"
    ];
}
