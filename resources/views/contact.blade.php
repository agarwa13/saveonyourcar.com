@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="col-sm-offset-3 col-sm-9">
                <p>
                    I am looking for: Audi A3, Petrol, Manual, 1.0 TFSI SE 3dr Hatchback
                </p>
            </div>

            <form class="form-horizontal">

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tel" class="col-sm-3 control-label">Tel</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="tel" placeholder="Tel">
                    </div>
                </div>

                <div class="form-group">
                    <label for="besttime" class="col-sm-3 control-label">Best Time to Call</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="besttime" placeholder="Best Time to Call">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contactmeby" class="col-sm-3 control-label">Contact Me By</label>
                    <div class="col-sm-9">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="email-preference" value="option1"> Email
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="tel-preference" value="option2"> Telephone
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="no-preference" value="option3"> No Preference
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contactmeby" class="col-sm-3 control-label">Anything you want to add?</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" placeholder="Considering other models? Just list them here, no need to fill out another form."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="attachfile" class="col-sm-3 control-label">Attach File</label>
                    <div class="col-sm-9">
                        <input type="file" id="attachfile">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
