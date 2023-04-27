<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attestation extends Model
{
    protected $fillable=[
        'nom_enfant','postnom_enfant','prenom_enfant','genre','bebe_id',
        'lieu_de_naissance','date_de_naissance','nompere','postnom_pere',
        'prenom_pere','telephone_pere','adresse_pere',
        'nationalite_pere','lieudenassance_pere','datenaissance_pere',
    ];
    use HasFactory;
}
