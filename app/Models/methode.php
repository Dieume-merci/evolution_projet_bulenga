<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Methode extends Model
{
    // use HasFactory;
    public function getmethode():HasMany
    {
        return $this->hasMany(Sous_methode::class);
    }
    
}
