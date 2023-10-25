<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class patient extends Model
{
    use HasFactory;
    public function Records(): HasMany
    {
        return $this->hasMany(Record::class);
    }
}
