<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisFacial extends Model
{
    protected $fillable = [
        "id",
        "patronFacial",
        "perfil",
        "asimetria",
        "alturaFE",
        "anchuraFE",
        "perfilMaxilar",
        "perfilMandibular",
        "surcoLM",
        "labiosEr",
        "idDatosGenerales"
    ];
}
