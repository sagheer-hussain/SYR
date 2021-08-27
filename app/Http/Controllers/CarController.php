<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Customers;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = new Cars;
        $customer = new Customers;
        $customers = $customer::all();
        $cars = $car::all();
        // $car_customers = Cars::customers;
        
        return view('cars.dashboard', compact('cars','customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $customer = new Customers;
        $customers = $customer::all();
        return view('cars.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

                'carname' => 'required',
                'carmodel' => 'required',
                'carno' => 'required',
                'carrent' => 'required',
                'customer-name' => 'required',
                
            ]);
            
        $cars = new Cars;
        
        $cars->car_name = $request->input('carname');
        $cars->car_model = $request->input('carmodel');
        $cars->car_no = $request->input('carno');
        $cars->car_rent = $request->input('carrent');
        $cars->customer_id = $request->input('customer-name');

        $cars->save();

        return redirect('home')->with('Success','New Car Registered Successfully!!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
