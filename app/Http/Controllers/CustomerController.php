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
        $customerList = Customer::latest()->get();

        return view('customers', [
            'customers' => $customerList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        
        $customer->names = request("names");
        $customer->lastnames = request("lastnames");
        $customer->area = request("area");
        $customer->address1 = request("address1");
        $customer->city = request("city");
        $customer->country = request("country");
        $customer->phone = request("phone");
        $customer->email = request("email");
        $customer->notes = request("notes");
        $customer->origin = "0";

        $customer->save();

        return redirect('/customersdt');

        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$customer = Customer::findOrFail($id);

        //return view('customers', [
        //    'customers' => $customer
        //]);


        $customerList = Customer::findOrFail($id);

        return view('singlecustomer', [
            'customers' => $customerList
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customersedit',['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->names = request("names");
        $customer->lastnames = request("lastnames");
        $customer->area = request("area");
        $customer->address1 = request("address1");
        $customer->city = request("city");
        $customer->country = request("country");
        $customer->phone = request("phone");
        $customer->email = request("email");
        $customer->notes = request("notes");

        $customer->save();

        return redirect('/datatable');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   $task=Task::findOrFail($id);
        // $task->delete();
        $customer = Customer::find($id);
        $customer->delete();

        return redirect ('/datatable');
    }
}
