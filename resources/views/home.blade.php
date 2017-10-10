@extends('layouts.app')

@section('content')


    <div class="country-wrap" style="height: 400px;">

        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="make">Select Make</label>
                            <select class="form-control">
                                <option>Acura</option>
                                <option>Audi</option>
                                <option>Aston Martin</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Select Model</label>
                            <select class="form-control">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A3</option>
                                <option>A4</option>
                                <option>A5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Next</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="sun"></div>
        <div class="grass"></div>
        <div class="street">
            <div class="car">
                <!--<div class="car-base"></div>-->
                <div class="car-body">
                    <div class="car-top-back">
                        <div class="back-curve"></div>
                    </div>
                    <div class="car-gate"></div>
                    <div class="car-top-front">
                        <div class="wind-sheild"></div>
                    </div>
                    <div class="bonet-front"></div>
                    <div class="stepney"></div>
                </div>
                <div class="boundary-tyre-cover">
                    <div class="boundary-tyre-cover-back-bottom"></div>
                    <div class="boundary-tyre-cover-inner"></div>
                </div>
                <div class="tyre-cover-front">
                    <div class="boundary-tyre-cover-inner-front"></div>
                </div>
                <div class="base-axcel">

                </div>
                <div class="front-bumper"></div>
                <div class="tyre">
                    <div class="gap"></div>
                </div>
                <div class="tyre front">
                    <div class="gap"></div>
                </div>
                <div class="car-shadow"></div>
            </div>
        </div>
        <div class="street-stripe"></div>
        <div class="hill">
            <!--<div class="tree-1">
                <div class="branch-1"></div>
                <div class="branch-2"></div>
                <div class="branch-3"></div>
            </div>
            <div class="tree-1">
            <div class="branch"></div>
            <div class="trunk"></div>
        </div>-->
        </div>

    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
