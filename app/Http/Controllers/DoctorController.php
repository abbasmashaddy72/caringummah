<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept_data = Department::get();
        $action = URL::route('doctor.store');

        return view('forms/doctor_ea', compact('dept_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $request->validated();
        Doctor::create([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'phone' => $request->phone,
            'clinic_hospital_name' => $request->hospital_name,
            'clinic_hospital_address' => $request->hospital_address,
            'clinic_hospital_phone' => $request->hospital_phone,
            'monthly_slots' => $request->monthly_slots,
            'extra_services' => $request->extra_services,
            'suggestions' => $request->suggestions,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('doctors')->with('message', 'Doctor Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor, $id)
    {
        $data = $doctor->findOrFail($id);
        $dept_data = Department::get();
        $action = URL::route('doctor.update', ['id' => $id]);

        return view('forms/doctor_ea', compact('data', 'dept_data', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $request->validated();
        // dd($request->all());
        Doctor::findOrFail($id)->update([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'phone' => $request->phone,
            'clinic_hospital_name' => $request->hospital_name,
            'clinic_hospital_address' => $request->hospital_address,
            'clinic_hospital_phone' => $request->hospital_phone,
            'monthly_slots' => $request->monthly_slots,
            'extra_services' => $request->extra_services,
            'suggestions' => $request->suggestions,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('doctors')->with('message', 'Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor, $id)
    {
        Doctor::findOrFail($id)->delete();

        return redirect()->route('doctors')->with('message', 'Doctor Deleted Successfully');
    }
}
