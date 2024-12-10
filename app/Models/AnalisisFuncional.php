<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisFuncional extends Model
{
    protected $fillable = [
        "id",
        "actividadComisural",
        "actividadLingual",
        "labioSuperior",
        "labioInferior",
        "masetero",
        "mentoniano",
        "respiracion",
        "deglucion",
        "idDatosGenerales"
    ];
}
