<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebe extends Model
{
    protected $fillable=[
        'attestation_id','bebe_complicationsAlaNaiss',
        'bebe_prc','bebe_arv','bebe_ctx',
        'bebe_probleme_constate','bebe_soins_traitement',
    ];
    use HasFactory;
}
