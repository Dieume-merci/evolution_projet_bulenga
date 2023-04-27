<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyTrough;

class patient extends Model
{
    // use HasFactory;
    public function getcpon():HasMany
    {
        return $this->hasMany(Cpon::class);
    }
    public function get_patent_from_maternite_to_accouchement()
    {
        return $this->hasManyThrough(
            Accouchement::class,
            Maternite::class,
            'patient_id',
            'maternite_id',
            'id',
            'id',
        );
    }
}
