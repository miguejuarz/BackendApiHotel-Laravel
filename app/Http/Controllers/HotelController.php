<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::all();
        return $hotels;
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
        $hotel = new Hotel();

        $hotel -> name_hotel = $request -> name_hotel;
        $hotel -> address = $request -> address;
        $hotel -> city_id = $request -> city_id;
        $hotel -> phone_number = $request ->phone_number;
        $hotel -> email = $request -> email;

        $hotel -> save();
        return $hotel;
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
        $hotel = Hotel::findOrFail($id);
        return $hotel;

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
        $hotel = Hotel::findOrFail($id);

        $hotel -> name_hotel = $request -> name_hotel;
        $hotel -> address = $request -> address;
        $hotel -> city_id = $request -> city_id;
        $hotel -> phone_number = $request ->phone_number;
        $hotel -> email = $request -> email;

        $hotel -> save();
        return $hotel;


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
        $hotel = Hotel::destroy($id);
        return $hotel;
    }
}
