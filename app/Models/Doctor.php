<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'qualification',
        'phone',
        'clinic_hospital_name',
        'clinic_hospital_address',
        'clinic_hospital_phone',
        'monthly_slots',
        'extra_services',
        'suggestions'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
