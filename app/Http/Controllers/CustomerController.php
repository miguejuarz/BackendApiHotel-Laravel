<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return $customers;
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
        $customer = new Customer();

        $customer -> customer_name = $request -> customer_name;
        $customer -> last_name = $request -> last_name;
        $customer -> email = $request -> email;
        $customer -> phone_number = $request -> phone_number;

        $customer -> save();
        return $customer;

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
        $customer = Customer::findOrFail($id);
        return $customer;
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
        $customer =  Customer::findOrFail($id);

        $customer -> customer_name = $request -> customer_name;
        $customer -> last_name = $request -> last_name;
        $customer -> email = $request -> email;
        $customer -> phone_number = $request -> phone_number;

        $customer -> save();
        return $customer;
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
        $customer = Customer::destroy($id);
        return $customer;
    }
}
 