<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Appointment extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'symptoms',
        'appointment_date',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
