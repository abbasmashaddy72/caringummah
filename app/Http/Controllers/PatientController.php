<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Appointment;
use App\Models\City;
use App\Models\Doctor;
use App\Models\Locality;
use App\Models\Patient;
use App\Models\Ummah;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = URL::route('patient.store');
        $ummah = Ummah::get();
        $doctor = Doctor::get();

        return view('forms/patient_ea', compact('action', 'ummah', 'doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $dob = new Carbon();
        $date_of_birth = $dob->subYears($request->age)->format('Y-m-d');
        if (!empty($request->appointment)) {
            $request->validated();
            $patient = Patient::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'relation' => $request->relation,
                'locality_id' => $request->locality_id,
                'ummah_id' => $request->ummah_id,
                'date_of_birth' => $date_of_birth,
                'gender' => $request->gender,
            ]);
            Appointment::create([
                'symptoms' => $request->symptoms,
                'appointment_date' => $request->appointment_date,
                'doctor_id' => $request->doctor_id,
                'patient_id' => $patient->id,
            ]);

            return redirect()->route('patients')->with('message', 'Appointment Added Successfully')->withInput();
        } else {
            $request->validated();
            Patient::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'relation' => $request->relation,
                'locality_id' => $request->locality_id,
                'ummah_id' => $request->ummah_id,
                'date_of_birth' => $date_of_birth,
                'gender' => $request->gender,
            ]);

            return redirect()->route('patients')->with('message', 'Patient Added Successfully')->withInput();
        }
        exit();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient, $id)
    {
        $action = URL::route('patient.update', ['id' => $id]);
        $ummah = Ummah::get();
        $data = Patient::findOrFail($id);
        $age = Carbon::parse($data->date_of_birth)->diff(Carbon::now())->format('%y');
        $city_id = Locality::where('id', $data->locality_id)->pluck('city_id')->first();
        $state_id = City::where('id', $city_id)->pluck('state_id')->first();
        $locality_id = $data->locality_id;
        $doctor = Doctor::get();

        return view('forms/patient_ea', compact('action', 'data', 'city_id', 'state_id', 'locality_id', 'ummah', 'age', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient, $id)
    {
        $dob = new Carbon();
        $date_of_birth = $dob->subYears($request->age)->format('Y-m-d');
        $request->validated();
        Patient::findOrFail($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'relation' => $request->relation,
            'locality_id' => $request->locality_id,
            'ummah_id' => $request->ummah_id,
            'date_of_birth' => $date_of_birth,
            'gender' => $request->gender,
        ]);

        return redirect()->route('patients')->with('message', 'Patient Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient, $id)
    {
        Patient::findOrFail($id)->delete();

        return redirect()->route('patients')->with('message', 'Patient Deleted Successfully');
    }
}
