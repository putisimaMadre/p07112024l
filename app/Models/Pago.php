<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        "id",
        "fecha",
        "evolucion",
        "costo",
        "aCuenta",
        "saldo",
        "idDatosGenerales"
    ];
}
