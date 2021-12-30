<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallCount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'doctor_id',
        'dialed_number'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
