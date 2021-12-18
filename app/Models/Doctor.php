<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Doctor extends Model implements Auditable
{
    use AuditingAuditable;
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
        'popup_image',
        'about',
        'photo'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'department_id', 'department_id');
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

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
