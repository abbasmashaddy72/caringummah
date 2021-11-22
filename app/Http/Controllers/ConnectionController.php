<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnectionRequest;
use App\Models\City;
use App\Models\Connection;
use App\Models\Locality;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ConnectionController extends Controller
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
        $action = URL::route('connection.store');

        return view('forms/connection_ea', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConnectionRequest $request)
    {
        $request->validated();
        Connection::create([
            'name' => $request->name,
            'type' => $request->type,
            'locality_id' => $request->locality_id,
        ]);
        return redirect()->route('connections')->with('message', 'Connection Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function show(Connection $connection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function edit(Connection $connection, $id)
    {
        $data = $connection->findOrFail($id);
        $city_id = Locality::where('id', $data->locality_id)->pluck('city_id')->first();
        $state_id = City::where('id', $city_id)->pluck('state_id')->first();
        $locality_id = $data->locality_id;
        $action = URL::route('connection.update', ['id' => $id]);

        return view('forms/connection_ea', compact('data', 'action', 'state_id', 'city_id', 'locality_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function update(ConnectionRequest $request, Connection $connection, $id)
    {
        $request->validated();
        Connection::findOrFail($id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'locality_id' => $request->locality_id,
        ]);
        return redirect()->route('connections')->with('message', 'Connection Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Connection  $connection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Connection $connection, $id)
    {
        Connection::findOrFail($id)->delete();

        return redirect()->route('connections')->with('message', 'Connection Deleted Successfully');
    }
}
