<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class maternite extends Model
{
    use HasFactory;
    protected $fillable=["id","maternite_grossesse_a_terme","maternite_statut_serologique_vih","maternite_obs","updated_at"];
    
    public function getmaternite():BelongsTo
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
