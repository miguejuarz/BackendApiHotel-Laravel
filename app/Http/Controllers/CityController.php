<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select *
        $cities = City::all(); // con ::all le indicamos que nos traiga todos los registros del modelo y me los guarda en()
        return $cities;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // aquivale a un INSERT INTO en lenguaje sql
        // no creamos nuestra veriable en plural porque solo nesecitamos un registro
        $city = new City();
        $city->name_city = $request -> name_city;
        $city->country_id = $request -> country_id;

        $city->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//$id, este dato lo manda el front-end
    {
        //para leer un solo registro atravez de su
        // equivalente a Select * .... Where id = $id, en lenguaje sql
        $city = City::findOrFail($id);
        return $city;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //para actualizar un registro por su
        $city = City::findOrFail($id);

        $city->name_city = $request -> name_city;
        $city->country_id = $request -> country_id;

        $city->save();
        return $city;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //para eliminar un registro de la BD atraves de su id
        $city = City::destroy($id);
        return $city;
    }
}
