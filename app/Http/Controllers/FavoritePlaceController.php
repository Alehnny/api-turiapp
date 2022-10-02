<?php

namespace App\Http\Controllers;

use App\Models\FavoritePlace;
use App\Http\Requests\StoreFavoritePlaceRequest;
use App\Http\Requests\UpdateFavoritePlaceRequest;

class FavoritePlaceController extends Controller
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
     * @param  \App\Http\Requests\StoreFavoritePlaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoritePlaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FavoritePlace  $favoritePlace
     * @return \Illuminate\Http\Response
     */
    public function show(FavoritePlace $favoritePlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoritePlaceRequest  $request
     * @param  \App\Models\FavoritePlace  $favoritePlace
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoritePlaceRequest $request, FavoritePlace $favoritePlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavoritePlace  $favoritePlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavoritePlace $favoritePlace)
    {
        //
    }
}
