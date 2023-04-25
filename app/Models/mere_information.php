<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mere_information extends Model
{
    protected $fillable=[
    'accouchement_id','problemesMat','soins_traitement','fer_folate','vit_a',
    'mild','arv','ctx','conseiller_pf','methode_pf'];
    use HasFactory;
    public function get_mere_from_accouchement():HasMany
    {
        return $this->hasMany(Accouchement::class);
    }
    // public function get_mere_from_patient():BelongsTo
    // {
    //     return $this->belongTo(Patient::class,'patient_id');
    // }
}
