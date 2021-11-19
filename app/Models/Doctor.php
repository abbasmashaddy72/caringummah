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
        'locality_id',
        'clinic_hospital_name',
        'clinic_hospital_address',
        'clinic_hospital_phone',
        'monthly_slots',
        'extra_services',
        'suggestions',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function totalappointmentCount()
    {
        return $this->appointment()
            ->selectRaw('doctor_id, count(*) as aggregate')
            ->groupBy('doctor_id');
    }

    public function monthlyappointmentCount()
    {
        return $this->appointment()
            ->selectRaw('doctor_id, count(*) as aggregate')
            ->whereMonth('appointment_date', date('m'))
            ->whereYear('appointment_date', date('Y'))
            ->groupBy('doctor_id');
    }
}
