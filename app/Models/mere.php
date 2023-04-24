<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mere extends Model
{
    protected $fillable=['patient_id',
    'mere_problemesMat','mere_soins_traitement','mere_fer_folate','mere_vit_a',
    'mere_mild','mere_arv','mere_ctx','mere_conseiller_pf','mere_methode_pf'];
    use HasFactory;
    public function get_mere_from_accouchement():HasMany
    {
        return $this->hasMany(Accouchement::class);
    }
    public function get_mere_from_patient():BelongsTo
    {
        return $this->belongTo(Patient::class,'patient_id');
    }
}
