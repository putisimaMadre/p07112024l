<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antecedentesPyP extends Model
{
    protected $fillable = [
        "si",
        "no",
        "fechaInicio",
        "fechaFinal",
        "idEnfermedad",
        "idDatosGenerales"
    ];
}