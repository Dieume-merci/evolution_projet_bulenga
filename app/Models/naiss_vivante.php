<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naiss_vivante extends Model
{
    protected $fillable=[
        'accouchement_id',
        'naiss_vivante_designation',
    ];
    use HasFactory;
}
