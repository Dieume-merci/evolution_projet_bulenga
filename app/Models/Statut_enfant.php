<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut_enfant extends Model
{
    protected $fillable=[
        'bebe_id',
        'designation','statut',
    ];
    use HasFactory;
}
