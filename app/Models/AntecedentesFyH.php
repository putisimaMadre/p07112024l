<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesFyH extends Model
{
    protected $fillable = [
        "id",
        "madre",
        "abuelaM",
        "abueloM",
        "otrosM",
        "padre",
        "abuelaP",
        "abueloP",
        "hermanosP",
        "otrosP",
        "idPatologias",
        "idDatosGenerales"
    ];
}
