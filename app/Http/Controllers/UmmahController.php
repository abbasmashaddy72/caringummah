<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmmahRequest;
use App\Models\Ummah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

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

        return view('forms/ummah_ea', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UmmahRequest $request)
    {
        dd($request->all());
        $request->validated();
        if (!empty($request->attachments)) {
            $newImageName = Str::random(20) . '.' . $request->attachments->extension();
            $request->attachments->move(public_path('assets/images/ummah'), $newImageName);
        } else {
            $newImageName = '';
        }
        if (!empty($request->photo)) {
            $newImageName2 = Str::random(20) . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/ummah'), $newImageName2);
        } else {
            $newImageName2 = '';
        }

        $dob = new Carbon();
        $date_of_birth = $dob->subYears($request->age)->format('Y-m-d');

        // dd($request->all());

        Ummah::create([
            'name' => $request->name,
            'date_of_birth' => $date_of_birth,
            'phone' => $request->phone,
            'photo' => $newImageName2,
            'connected_with' => $request->connected_with,
            'connected_where' => $request->connected_where,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
            'location' => $request->location,
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
        $action = URL::route('ummah.update', ['id' => $id]);
        $age = Carbon::parse($data->date_of_birth)->diff(Carbon::now())->format('%y');
        // echo $data;
        // exit();

        return view('forms/ummah_ea', compact('data', 'action', 'age'));
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
            $request->attachments->move(public_path('assets/images/ummah'), $newImageName);
        } else {
            $newImageName = '01.png';
        }

        Ummah::findOrFail($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'connected_with' => $request->connected_with,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
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
        $ummah = Ummah::findOrFail($id);
        $age = Carbon::parse($ummah->date_of_birth)->diff(Carbon::now())->format('%y years');
        // dd($age);

        return view('profile.id_card', compact('ummah', 'age'));
    }
}
