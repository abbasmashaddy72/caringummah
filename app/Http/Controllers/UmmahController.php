<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmmahRequest;
use App\Imports\UmmahImport;
use App\Models\City;
use App\Models\Connection;
use App\Models\Locality;
use App\Models\Ummah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class UmmahController extends Controller
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
        $action = URL::route('ummah.store');
        $connections = Connection::get();

        return view('forms/ummah_ea', compact('action', 'connections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UmmahRequest $request)
    {
        $request->validated();
        if (!empty($request->attachments)) {
            $newImageName = Str::random(20) . '.' . $request->attachments->extension();
            $request->attachments->move(public_path('images/ummah'), $newImageName);
        } else {
            $newImageName = [];
        }
        if (!empty($request->photo)) {
            $newImageName2 = Str::random(20) . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/ummah'), $newImageName2);
        } else {
            $newImageName2 = null;
        }

        $dob = new Carbon();
        $date_of_birth = $dob->subYears($request->age)->format('Y-m-d');

        Ummah::create([
            'name' => $request->name,
            'date_of_birth' => $date_of_birth,
            'phone' => $request->phone,
            'photo' => $newImageName2,
            'connection_id' => $request->connection_id,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
            'locality_id' => $request->locality_id,
            'member_count' => $request->member_count,
            'family_members' => $request->family_members,
            'attachments' => $newImageName,
        ]);
        return redirect()->route('ummahs')->with('message', 'Ummah Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function show(Ummah $ummah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function edit(Ummah $ummah, $id)
    {
        $data = $ummah->findOrFail($id);
        $city_id = Locality::where('id', $data->locality_id)->pluck('city_id')->first();
        $state_id = City::where('id', $city_id)->pluck('state_id')->first();
        $locality_id = $data->locality_id;
        $action = URL::route('ummah.update', ['id' => $id]);
        $age = Carbon::parse($data->date_of_birth)->diff(Carbon::now())->format('%y');
        $connections = Connection::get();

        return view('forms/ummah_ea', compact('data', 'action', 'age', 'city_id', 'state_id', 'locality_id', 'connections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function update(UmmahRequest $request, $id)
    {
        $request->validated();
        if (!empty($request->attachments)) {
            $newImageName = Str::random(20) . '.' . $request->attachments->extension();
            $request->attachments->move(public_path('images/ummah'), $newImageName);
        } else {
            $newImageName = [];
        }
        if (!empty($request->photo)) {
            $newImageName2 = Str::random(20) . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/ummah'), $newImageName2);
        } else {
            $newImageName2 = null;
        }

        $dob = new Carbon();
        $date_of_birth = $dob->subYears($request->age)->format('Y-m-d');

        Ummah::findOrFail($id)->update([
            'name' => $request->name,
            'date_of_birth' => $date_of_birth,
            'phone' => $request->phone,
            'photo' => $newImageName2,
            'connection_id' => $request->connection_id,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
            'locality_id' => $request->locality_id,
            'member_count' => $request->member_count,
            'family_members' => $request->family_members,
            'attachments' => $newImageName,
        ]);

        return redirect()->route('ummahs')->with('message', 'Ummah Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ummah $ummah, $id)
    {
        Ummah::findOrFail($id)->delete();

        return redirect()->route('ummahs')->with('message', 'Ummah Deleted Successfully');
    }

    public function print($id)
    {
        $ummah = Ummah::with('connection')->findOrFail($id);
        $age = Carbon::parse($ummah->date_of_birth)->diff(Carbon::now())->format('%y years');

        return view('profile.id_card', compact('ummah', 'age'));
    }

    public function import(Request $request)
    {
        Excel::import(new UmmahImport(), $request->import);

        return redirect()->route('doctors')->with('message', 'Ummah Imported Successfully');
    }
}
