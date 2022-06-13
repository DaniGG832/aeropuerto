<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAeropuertoRequest;
use App\Http\Requests\UpdateAeropuertoRequest;
use App\Models\Aeropuerto;

class AeropuertoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAeropuertoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAeropuertoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function show(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAeropuertoRequest  $request
     * @param  \App\Models\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAeropuertoRequest $request, Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aeropuerto $aeropuerto)
    {
        //
    }
}
