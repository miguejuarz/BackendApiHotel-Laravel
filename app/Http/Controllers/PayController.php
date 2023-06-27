<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pays = Pay::all();
        return $pays;
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
        $pay = new Pay();

        $pay -> reservation_id = $request -> reservation_id;
        $pay -> method_id = $request -> method_id;
        $pay -> amountPayable = $request -> amountPayable;
        $pay -> date = $request ->date;
        $pay -> state = $request -> state;

        $pay -> save();
        return $pay;
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
        $pay = Pay::findOrFail($id);
        return $pay;
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
        $pay = Pay::findOrFail($id);

        $pay -> reservation_id = $request -> reservation_id;
        $pay -> method_id = $request -> method_id;
        $pay -> amountPayable = $request -> amountPayable;
        $pay -> date = $request ->date;
        $pay -> state = $request -> state;

        $pay -> save();
        return $pay;
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
        $pay = Pay::destroy($id);
        return $pay;
    }
}
