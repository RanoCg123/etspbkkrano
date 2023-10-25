<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class doctor extends Model
{
    use HasFactory;
    public function Records(): HasMany
    {
        return $this->hasMany(Record::class);
    }
}
