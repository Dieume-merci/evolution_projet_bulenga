<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complications extends Model
{
    protected $fillable=[
        'accouchement_id',
        'complication_designation',
        'complication_complications_obstetricales',
    ];
    use HasFactory;
}
