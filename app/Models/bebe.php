<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebe extends Model
{
    protected $fillable=[
        'bebe_complicationsAlaNaiss',
        'bebe_prc','bebe_arv','bebe_ctx',
        'bebe_probleme_constate','bebe_soins_traitement',
        'bebe_statut','accouchement_id',
    ];
    use HasFactory;
}
