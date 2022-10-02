<?php

namespace App\Http\Controllers;

use App\Models\TouristPlacePic;
use App\Http\Requests\StoreTouristPlacePicRequest;
use App\Http\Requests\UpdateTouristPlacePicRequest;

class TouristPlacePicController extends Controller
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
     * @param  \App\Http\Requests\StoreTouristPlacePicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTouristPlacePicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TouristPlacePic  $touristPlacePic
     * @return \Illuminate\Http\Response
     */
    public function show(TouristPlacePic $touristPlacePic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTouristPlacePicRequest  $request
     * @param  \App\Models\TouristPlacePic  $touristPlacePic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTouristPlacePicRequest $request, TouristPlacePic $touristPlacePic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TouristPlacePic  $touristPlacePic
     * @return \Illuminate\Http\Response
     */
    public function destroy(TouristPlacePic $touristPlacePic)
    {
        //
    }
}
