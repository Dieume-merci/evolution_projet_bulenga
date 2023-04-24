<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class problemes_nn extends Model
{
    protected $fillable=[
        'accouchement_id','problemes_nn_conjonctivite_nn',
        'problemes_nn_asphyxie_nn','problemes_nn_infection_majeure',
        'problemes_nn_malformation_cong_visible','problemes_nn_autres'
    ];
    use HasFactory;
}
