<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pf extends Model
{
    use HasFactory;
    public function getplaning():BelongsTo
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}