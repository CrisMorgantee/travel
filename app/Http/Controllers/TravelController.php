<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Team;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data                  = $request->all();
        $data['registered_by'] = $request->user_id;
        $newTravel             = Travel::query()->create($data);

        foreach ($data['team'] as $member => $value) {
            Team::query()->create(['user_id' => $value, 'travel_id' => $newTravel->id]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
