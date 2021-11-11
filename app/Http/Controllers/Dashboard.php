<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Ummah;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $doctor_count = Doctor::count();
        $ummah_count = Ummah::count();
        $patient_count = Patient::count();
        $appointment_count = Appointment::count();

        return view('dashboard', compact(['doctor_count', 'ummah_count', 'patient_count', 'appointment_count',]));
    }
}
