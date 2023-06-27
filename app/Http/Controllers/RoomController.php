<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        return $rooms;
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
        $room = new Room();

        $room -> hotel_id = $request -> hotel_id;
        $room -> type_room = $request -> type_room;
        $room -> night_price = $request -> night_price;
        $room -> capacity = $request ->capacity;
        $room -> description_room = $request ->description_room;
        $room -> aviable = $request ->aviable;

        $room -> save();
        return $room;
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
        $room = Room::findOrFail($id);
        return $room;
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
        $room = Room::findOrFail($id);

        $room -> hotel_id = $request -> hotel_id;
        $room -> type_room = $request -> type_room;
        $room -> night_price = $request -> night_price;
        $room -> capacity = $request ->capacity;
        $room -> description_room = $request ->description_room;
        $room -> aviable = $request ->aviable;

        $room -> save();
        return $room;

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
        $room = Room::destroy($id);
        return $room;
    }
}
