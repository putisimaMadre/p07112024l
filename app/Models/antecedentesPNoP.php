<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antecedentesPNoP extends Model
{
    protected $fillable = [
        "alcohol",
        "tabaquismo",
        "drogas",
        "otros",
        "idDatosGenerales"
    ];
}
