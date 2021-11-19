<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'locality_id',
        'ummah_id',
        'relation',
        'date_of_birth',
        'gender',
    ];

    public function ummah()
    {
        return $this->belongsTo(Ummah::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
