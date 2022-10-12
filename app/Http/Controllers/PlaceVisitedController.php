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
        $placeVisited = new PlaceVisited;
        $placeVisited->tourist_place_id = $request->tourist_place_id;
        $placeVisited->user_id = $request->user_id;
        $placeVisited->visit_date = $request->visit_date;

        return $placeVisited->save() ? responseJson(true, 'Place visited add', 202) : responseJson(false, 'error', 200);
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
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceVisited  $placeVisited
     * @return \Illuminate\Http\Response
     */
    public function showWithUser(PlaceVisited $placeVisited, $id)
    {
        return $placeVisited->where('user_id', $id)->findOrFail()->get();
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
