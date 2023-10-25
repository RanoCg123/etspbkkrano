<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Record extends Model
{
    use HasFactory;
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(doctor::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(patient::class);
    }
}
