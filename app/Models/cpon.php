<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class cpon extends Model
{
    use HasFactory;
    public function getpatient():BelongsTo
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
    public function gettraitementcpon():BelongsToMany
    {
        return $this->belongsToMany(Traitement_cpon::class,'cpon_traitement_cpons');
    }
}
