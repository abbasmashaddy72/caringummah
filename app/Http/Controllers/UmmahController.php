<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmmahRequest;
use App\Models\Ummah;
use Illuminate\Http\Request;
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
        return view('forms/ummah_ea');
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
            $request->attachments->move(public_path('assets/images/ummah'), $newImageName);
        } else {
            $newImageName = '01.png';
        }
        Ummah::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'connected_with' => $request->connected_with,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
            'member_count' => $request->member_count,
            'family_members' => $request->family_members,
            'attachments' => $newImageName,

            'department_id' => 1,
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
    public function edit(Ummah $ummah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ummah $ummah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ummah  $ummah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ummah $ummah)
    {
        //
    }
}
