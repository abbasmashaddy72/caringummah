<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AppointmentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = URL::route('appointment.store');
        $patient = Patient::get();
        $doctor = Doctor::get();

        return view('forms/appointment_ea', compact('action', 'doctor', 'patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request)
    {
        $request->validated();
        Appointment::create([
            'symptoms' => $request->symptoms,
            'appointment_date' => $request->appointment_date,
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
        ]);
        return redirect()->route('appointments')->with('message', 'Patient Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment, $id)
    {
        $action = URL::route('appointment.update', ['id' => $id]);
        $data = Appointment::findOrFail($id);
        $patient = Patient::get();
        $doctor = Doctor::get();

        return view('forms/appointment_ea', compact('action', 'data', 'patient', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(AppointmentRequest $request, Appointment $appointment, $id)
    {
        $request->validated();
        Appointment::findOrFail($id)->update([
            'symptoms' => $request->symptoms,
            'appointment_date' => $request->appointment_date,
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
        ]);

        return redirect()->route('appointments')->with('message', 'Patient Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment, $id)
    {
        Appointment::findOrFail($id)->delete();

        return redirect()->route('appointments')->with('message', 'Appointment Deleted Successfully');
    }
}
