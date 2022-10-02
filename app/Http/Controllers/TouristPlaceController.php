<?php

namespace App\Http\Controllers;

use App\Models\TouristPlace;
use App\Http\Requests\StoreTouristPlaceRequest;
use App\Http\Requests\UpdateTouristPlaceRequest;

class TouristPlaceController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTouristPlaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTouristPlaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TouristPlace  $touristPlace
     * @return \Illuminate\Http\Response
     */
    public function show(TouristPlace $touristPlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTouristPlaceRequest  $request
     * @param  \App\Models\TouristPlace  $touristPlace
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTouristPlaceRequest $request, TouristPlace $touristPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TouristPlace  $touristPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(TouristPlace $touristPlace)
    {
        //
    }
}
