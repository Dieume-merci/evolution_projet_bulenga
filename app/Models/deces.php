<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deces extends Model
{
    protected $fillable=[
        'accouchement_id',
        'dece_designation',
        'dece_age',
    ];
    use HasFactory;
}
