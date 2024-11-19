<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $fillable = [
        "observacionesPatologias",
        "idDatosGenerales",
        "observacionesAntecedentesPyP",
        "observacionesAnalisisFacial",
        "observacionesEvaluacionClinica",
        "planTratamientoYobjetivos",
        "tecnicaAemplear",
        "tiempoEstimadoYpronostico"
    ];
}
