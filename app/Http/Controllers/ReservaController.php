<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfirmacionRequest;


use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Models\Reserva;
use App\Models\Vuelo;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Auth::user()->reservas;

        //dd($reservas);

        return view('reservas.index', ['reservas' =>$reservas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$vuelos = Vuelo::with('reservas')->get();
        $vuelos = Vuelo::with('reservas')->withsum('reservas','plazas')->get();

        //return $vuelos;
        
        $reserva = new Reserva();

        return view('reservas.create', 
            ['reserva' =>$reserva,
            'vuelos'=>$vuelos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservaRequest $request)
    {

        
        $reserva = new Reserva();
        
        $reserva->vuelo_id=$request->validated()['vuelo_id'];
        $reserva->user_id = Auth::id();
        $reserva->plazas=$request->validated()['plazas'];
        
        //return $request->validated();
        
        $reserva->save(); 

        return redirect()->route('reservas.index')->with('success','reserva creada');


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function confirmacion(StoreConfirmacionRequest $request)
    {

        
        $datos = $request ->validated() ;
       
        $vuelo = Vuelo::find($datos['vuelo_id']);

        //dd($vuelo->aeropuertoSalida->ciudad);

        $pazasLibres =$vuelo->plazas_totales- Reserva::where('vuelo_id',$datos['vuelo_id'])->sum('plazas');

        //return($pazasLibres);
        
        return view('reservas.confirmacion',compact('datos','vuelo','pazasLibres'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservaRequest  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
