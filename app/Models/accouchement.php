<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class accouchement extends Model
{
    protected $fillable=[
        'type_accouchement_id','user_id','bebe_id',
        'maternite_id','accouchement_date_accouchement'
    ];
    use HasFactory;
    public function get_association_acouchement_maternite():HasMany
    {
        return $this->hasMany(Maternite::class);
    }
    public function get_accouchement_from_bebe():HasMany
    {
        return $this->hasMany(Bebe::class);
    }
}
