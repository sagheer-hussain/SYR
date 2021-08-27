@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  


<section class="section py-4">
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <marquee behavior="" direction="">Here You can Update All Record!</marquee>
        </div>

        <div class="col-sm-12 text-right">
            <a href="{{('registercar')}}" class="btn btn-success">Register a New Car </a>
            <a href="{{('createcustomer')}}" class="btn btn-primary">Register a New Customer </a>
        </div>
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Session::get('success')}}
        </div>
        @endif
        <div class="all-record table-responsive pb-5">
            <h3>Cars Record</h3>
            <table class="table table-striped table-dark mb-4">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Model</th>
                    <th scope="col">Car No.</th>
                    <th scope="col">Car Rent</th>
                    <th scope="col">Customer</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car )
                  <tr>
                    <td>{{$car->car_id}}</td>
                    <td>{{$car->car_name}}</td>
                    <td>{{$car->car_model}}</td>
                    <td>{{$car->car_no}}</td>
                    <td>{{$car->car_rent}}</td>
                    <td>
                        @foreach ($customers as $customer)
                            @if ($customer->customer_id == $car->customer_id)

                                {{$customer->customer_name }}                           
                                
                            @endif
                                 
                        @endforeach
                    </td>
                    <td class="text-center">
                        <a class="btn-sm btn-warning" href="{{'edit'}}">Edit</a>
                        <a class="btn-sm btn-success" href="{{'update'}}">Update</a>
                        <a class="btn-sm btn-danger" href="{{'delete'}}">Delete</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
        
        <div class="all-record table-responsive">
            <h3>Customers Record</h3>
            <table class="table table-striped table-dark mb-4">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer CNIC</th>
                    <th scope="col">Customer Phone</th>
                    <th scope="col">Customer Company</th>
                    <th scope="col">Customer Location</th>
                    <th scope="col">Car Issue Date</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer )
                  <tr>
                    <td>{{$customer->customer_id}}</td>
                    <td>{{$customer->customer_name}}</td>
                    <td>{{$customer->customer_cnic}}</td>
                    <td>{{$customer->customer_phone}}</td>
                    <td>{{$customer->customer_company}}</td>
                    <td>{{$customer->customer_location}}</td>
                    <td>{{$customer->issue_date}}</td>
                   
                        <td class="text-center">
                            <a class="btn-sm btn-warning" href="{{'edit'}}">Edit</a>
                            <a class="btn-sm btn-success" href="{{'update'}}">Update</a>
                            <a class="btn-sm btn-danger" href="{{'delete'}}">Delete</a>
                        </td>
                   
                    
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>


    </div>
</section>

@endsection