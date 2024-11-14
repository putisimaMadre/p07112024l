<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Padre extends Model
{
    public function hijos(): HasMany{
        return $this->hasMany(Hijo::class);
    }
}
