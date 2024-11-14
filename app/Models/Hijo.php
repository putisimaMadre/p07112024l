<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hijo extends Model
{
    public function padre(): BelongsTo{
        return $this->belongsTo(Padre::class);
    }
}
