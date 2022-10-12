<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;

class PriceController extends Controller
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
     * @param  \App\Http\Requests\StorePriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePriceRequest $request)
    {
        $price = new Price;
        $price->tourist_place_id = $request->tourist_place_id;
        $price->description = $request->description;
        $price->value = $request->value;

        return $price->save() ? responseJson(true, 'Price add', 202) : responseJson(false, 'error', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function showWithTouristPlace(Price $price, $id)
    {
        return $price->where('tourist_place_id', $id)->findOrFail()->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePriceRequest  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePriceRequest $request, Price $price, $id)
    {
        $price_ = $price->findOrFail($id);
        $price_->description = $request->description;
        $price_->value = $request->value;

        return $price_->save() ? responseJson(true, 'Comment update', 200) : responseJson(false, 'error', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
    }
}
