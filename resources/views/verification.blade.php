@extends('layouts.mainlayout')
@section('content')

    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>Integrated Stamp Duty Services - Verification</h4>
                </div>
            </div>
        </div>

        <form action="#" class="contact-form" >
            <div class="form-group">
                
                    <label class="control-label"> Stamp Duty Certificate Number:</label>

                    <div class = "row">
                    <div class="col-sm-6">
                        <input id="certNo" name="certId" class="form-control" onfocus="clearfield()" placeholder="Enter Stamp Duty Certificate Number Here" required/>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit">Submit Now</button>
                    </div>
                </div>
                </div>
        </form>

        

        

    </div>

@endsection