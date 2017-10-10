@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="select-box-container">

            <div class="col-md-6 col-md-offset-3">

                <div class="text-center">
                    <h2 id="request-a-quote-heading">Request a Quote</h2>
                </div>

                <form class="form-horizontal">

                    <div class="form-group text-center">
                        <select class="form-control request-a-quote-select">
                            <option selected disabled hidden>Select Make</option>
                            <option>Acura</option>
                            <option>Audi</option>
                            <option>Aston Martin</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <select class="form-control request-a-quote-select">
                            <option selected disabled hidden>Select Model</option>
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>A4</option>
                            <option>A5</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <select class="form-control request-a-quote-select">
                            <option selected disabled hidden>Select Fuel</option>
                            <option>Petrol</option>
                            <option>Diesel</option>
                            <option>Hybrid</option>
                            <option>Electric</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <select class="form-control request-a-quote-select">
                            <option selected disabled hidden>Select Transmission</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg remove-border">Search</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection
