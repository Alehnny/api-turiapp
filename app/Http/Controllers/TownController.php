<?php

namespace App\Http\Controllers;

use App\Models\Town;
use App\Http\Requests\StoreTownRequest;
use App\Http\Requests\UpdateTownRequest;
use \Illuminate\Database\Eloquent\ModelNotFoundException;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = Town::all();

        return $towns;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTownRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTownRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town, $id)
    {
        return $town->findOrFail($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function showWithDepartament(Town $town, $id)
    {
        return $town->where('department_id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTownRequest  $request
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTownRequest $request, Town $town)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        //
    }
}
