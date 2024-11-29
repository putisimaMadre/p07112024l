<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionClinicaInfantil extends Model
{
    protected $fillable = [
        "exploracion",
        "motivo",
        "observaciones",
        "idDatosGenerales"
        ];
}
