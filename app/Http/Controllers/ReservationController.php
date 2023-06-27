<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $reservations = Reservation::all();
        return $reservations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $reservation = new Reservation();

        $reservation -> room_id = $request -> room_id;
        $reservation -> customer_id = $request -> customer_id;
        $reservation -> start_date = $request -> start_date;
        $reservation -> end_date = $request ->end_date;

        $reservation -> save();
        return $reservation;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reservation = Reservation::findOrFail($id);
        return $reservation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reservation = Reservation::findOrFail($id);

        $reservation -> room_id = $request -> room_id;
        $reservation -> customer_id = $request -> customer_id;
        $reservation -> start_date = $request -> start_date;
        $reservation -> end_date = $request ->end_date;

        $reservation -> save();
        return $reservation;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reservation = Reservation::destroy($id);
        return $reservation;
    }
}
