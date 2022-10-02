<?php

namespace App\Http\Controllers;

use App\Models\PlaceVisited;
use App\Http\Requests\StorePlaceVisitedRequest;
use App\Http\Requests\UpdatePlaceVisitedRequest;

class PlaceVisitedController extends Controller
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
     * @param  \App\Http\Requests\StorePlaceVisitedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaceVisitedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceVisited  $placeVisited
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceVisited $placeVisited)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaceVisitedRequest  $request
     * @param  \App\Models\PlaceVisited  $placeVisited
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaceVisitedRequest $request, PlaceVisited $placeVisited)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceVisited  $placeVisited
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaceVisited $placeVisited)
    {
        //
    }
}
