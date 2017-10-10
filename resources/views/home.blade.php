@extends('layouts.app')

@section('content')


    <div class="country-wrap">

        <div class="container">
            <div class="row">
                <div id="request-a-quote-box" class="col-md-5">

                    <div class="text-center">
                        <h2 id="request-a-quote-heading">Request a Quote</h2>
                    </div>

                    <form class="form-horizontal">

                        <div class="form-group text-center">
                            {{--<label for="make">Select Make</label>--}}
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
                            {{--<label for="model">Select Model</label>--}}
                            <select class="form-control request-a-quote-select">
                                <option selected disabled hidden>Select Model</option>
                                <option>A1</option>
                                <option>A2</option>
                                <option>A3</option>
                                <option>A4</option>
                                <option>A5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg remove-border" >Next</button>
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
        <div class="hill"></div>
    </div>

    <div class="container" id="home-copy">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Know what car you want?
                </h1>
                <h1>
                    Don't feel comfortable haggling with price?
                </h1>
                <h1>
                    Then use <span class="highlight">saveonyourcar.com</span>, it's what we do!
                </h1>
            </div>
        </div>

        <div class="row home-page-bottom-buttons">
            <div class="col-md-6">
                <a class="btn-lg btn-primary btn-block text-center">Search</a>
            </div>
            <div class="col-md-6">
                <a class="btn-lg btn-default btn-block text-center">How It Works</a>
            </div>
        </div>

    </div>
@endsection
