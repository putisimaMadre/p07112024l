<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
    protected $fillable = [
        "id",
        "nombre",
        "domicilio",
        "entidad",
        "ocupacion",
        "escolaridad",
        "fechaNacimiento",
        "edad",
        "sexo",
        "lugarNacimiento",
        "estadoCivil",
        "numeroTelefono",
    ];
}
