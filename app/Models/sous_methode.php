<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sous_methode extends Model
{
    // use HasFactory;
    public function getsous_methode():BelongsTo
    {
        return $this->belongsTo(Methode::class);
    }
}
