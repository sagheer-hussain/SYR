@extends('layouts.app')

@section('title', 'Register a new Car')

@section('content')

    <section class="section py-4">
        <div class="container ">
            <h3 style="margin-bottom: 20px">Register a New Car</h3>

            

            <form action="{{'addcar'}}" method="GET">

                {{csrf_field()}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="car-name">Car Name</label>
                            <input name="carname" type="text" class="form-control" placeholder="Enter Car Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="car-model">Car Model</label>
                            <input name="carmodel" type="number" class="form-control" placeholder="Enter Car Model">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="car-no">Car No. Plate</label>
                            <input name="carno" type="text" class="form-control" placeholder="Enter Car No. Plate">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="car-rent">Car Rent</label>
                            <input name="carrent" type="number" class="form-control" placeholder="Enter Car Rent">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="customer-name">Customer Name</label>
                            <select name="customer-name" class="form-control">
                                @foreach ( $customers as $customer )
                                <option  value="{{$customer->customer_id}}">{{$customer->customer_name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-between">
                        <a href="{{'home'}}" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                    </div>
                </div>


            </form>

        </div>
    </section>


@endsection
