<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soins_interventions_nn extends Model
{
    protected $fillable=[
        'accouchement_id','soins_interventions_nn_nn_soins_essentiels','soins_interventions_nn_nn_allaites_dans_heure','soins_interventions_nn_ayant_recu_at_ben_iv_im',
        'soins_interventions_nn_nn_methode_Kangourou','soins_interventions_nn_nn_prematures','soins_interventions_nn_nn_beneficiant_reanimation','soins_interventions_nn_nvp_au_nn',
    ];
    use HasFactory;
}
