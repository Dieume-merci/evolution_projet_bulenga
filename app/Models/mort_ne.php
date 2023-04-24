<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mort_ne extends Model
{
    protected $fillable=[
        'accouchement_id',
        'mort_ne_designation',
    ];
    use HasFactory;
}
