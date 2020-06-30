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

        {{-- @if($is_displayed == 1)  --}}

        <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
            <div class="card-body">
                <table id="basicExample" class="table table-bordered table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>S/N</th>
                        <th class="text-center">Ceritifcate Number</th>
                        <th>Names of Parties</th>
                        <th>Instrument Name</th>
                        <th>Amount Paid (₦)</th>
                    </tr>
                </thead>
                <tbody>
                    <form>
                    @foreach($verifications as $verification)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $verification->assess_no }}</td>
                            <td>{{ $verification->payera_name. ' '.$verification->payerb_name  }}</td>
                            <td>{{ $verification->instrument_descrp }}</td>
                            <td>{{ $verification->paid_amount }}</td>
                        </tr>
                    @endforeach
                    </form>
                </tbody>
                </table>
            <span class="d-flex justify-content-end">{{ $verifications->links() }}</span> 

            </div>

            </div>
        </div>
        </div>
        

    </div>

@endsection