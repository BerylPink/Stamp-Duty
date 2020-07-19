@include('layouts.partials._messages')
{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Stamp Duty Assessment')
@section('content')

    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Stamp Duty Assessment
                    </h1>	
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Stamp Duty Assessment</a></p>
                </div>											
            </div>
        </div>
    </section>

    <div class="whole-wrap">
        <div class="container">
            <div class="section-body table-responsive">
                    <div class="col-lg-12">
                        <br>
                        <h4 class="d-flex justify-content-center">Stamp Duty Assessment</h4>
                        <br />
                        <form id="partyform" method="POST" action="{{ route('assessments.store') }}">
                            @csrf
                            <input type="hidden" name="stamp_duty_id" class="form-control" value="{{ $stampDutyId}}">

                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Party A</h5>
                                    <br/>
                                    <table id="party-a-dynamic-fields" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Payer ID</th>
                                                <th>Business/Last Name</th>
                                                <th>First Name</th>
                                                <th>Phone Number</th>
                                                <th>E-Mail</th>
                                                <th>Business/Residential Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" id="payer_id" name="payer_id[]" class="form-control" required  value="{{ old('payer_id[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="business_or_last_name" name="business_or_last_name[]" class="form-control" required value="{{ old('business_or_last_name[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="firstname" name="firstname[]" class="form-control" value="{{ old('firstname[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="phone_no" name="phone_no[]" class="form-control phone_no" required value="{{ old('phone_no[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="email" name="email[]" class="form-control" required value="{{ old('email[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="address" name="address[]" class="form-control" required value="{{ old('address[]') }}">
                                                </td>
                                            
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <br/>
                                    <button type="button" id="btnpartya" class="btn btn-primary" style="width: 200px;"><span class="fa fa-plus"></span> Add More Parties</button>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Party B</h5>
                                    <br/>
                                    <table id="party-b-dynamic-fields" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Payer ID</th>
                                                <th>Business/Last Name</th>
                                                <th>First Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Business/Residential Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" id="party_b_payer_id" name="party_b_payer_id[]" class="form-control" required value="{{ old('party_b_payer_id[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="party_b_business_or_last_name" name="party_b_business_or_last_name[]" class="form-control" value="{{ old('party_b_business_or_last_name[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="party_b_firstname" name="party_b_firstname[]" required="required" class="form-control" value="{{ old('party_b_firstname[]') }}">
                                                </td>
                                                <td>
                                                    <input type="tel" id="party_b_phone_no" maxlength="11" name="party_b_phone_no[]" class="form-control party_b_phone_no" value="{{ old('party_b_phone_no[]') }}">
                                                </td>
                                                <td>
                                                    <input type="email" id="party_b_email" name="party_b_email[]" class="form-control" value="{{ old('party_b_email[]') }}">
                                                </td>
                                                <td>
                                                    <input type="text" id="party_b_address" name="party_b_address[]" class="form-control" value="{{ old('party_b_address[]') }}">
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <br/>
                                    <button type="button" id="btnpartyb" class="btn btn-danger" style="width: 200px;"><span class="fa fa-plus"></span> Add More Parties</button>
                                </div>
                            </div>
                            <br/><br/>
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend> 
                                            <label for="" class="col-sm-4 control-labelx" style="font-size: 14px;font-weight: bold"><i>INSTRUMENT DETAILS</i></label>
                                        </legend>
                                    </fieldset>
                                    <hr/>

                                        <div class="row">
                                            <div class="form-group col-lg-3 ">
                                                <label>Transaction Date</label>
                                                <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                            <input type="date" id="transaction_date" name="transaction_date"  class="form-control" maxlength="10" value="{{ old('transaction_date') }}" required/>
                                            
                                            </div>

                                            <div class="form-group col-lg-3 ">
                                                <label>Instrument Type</label>
                                                <input  class="form-control" id="instrument" type="text" placeholder="{{ $stampDutyDetails->name }}" disabled />
                                
                                            </div>

                                            <div class="form-group col-lg-3 ">
                                                <label>Consideration Amount and Value</label>
                                                <input id="amount" name="amount" placeholder="{{ $stampDutyDetails->rate }}" type="text" class="form-control" disabled />
                                            
                                            </div> 

                                            <div class="form-group col-lg-3 ">
                                                <label class="pull-left">Number of Extra Copy <span style="color:red; font-size:13px;" >₦50/copy</span></label>
                                                <input type="tel" id="no_of_extra_copies" name="no_of_extra_copies"  class="form-control" maxlength="2" value="{{ old('no_of_extra_copies') }}" required/>
                                                
                                            </div>
                                        </div>

                                    <div class="col-md-12">
                                        {{-- <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-12 col-xs-12"></label>
                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                <label class="checkbox-inline checkbox-custom">
                                                    <input type="checkbox" id="chkcapitalgain" name="chkcapitalgain" value="1"><i></i> ADD CAPITAL GAIN TAX?
                                                </label>
                                            </div>
                                            <div class="col-md-7 col-sm-12 col-xs-12"></div>
                                        </div> --}}

                                        <div class="col-md-12">
                                            <div class="form-group d-flex justify-content-center">
                                        
                                                <button type="button" id="reset" class="btn btn-danger" style="margin-right: 5px;"><span class="fa fa-refresh" onclick="resetform()"></span> Reset </button>
                                                <button type="submit" id="pay" class="btn btn-success btn-block btnsubmit" > Submit</button>
                                
                                                </div>
                                            </div>
                                        </div>
                                        <br/><br/>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
                        

<script>

    $(document).ready(function () {

        // $('#reset').click(function (){
        //     $('#partyform').trigger('reset');
        // });

        var count = 1;
        var countB = 1;

        //add row for Party A
        $(document).on('click', '#btnpartya', function(){
            count++;
            dynamicFieldA(count);

        });

        //remove row for Party A
        $(document).on('click', '.remove-party-a', function(){
            count--;
            $(this).closest("tr").remove();
        });

        //add row for Party B
        $(document).on('click', '#btnpartyb', function(){
            countB++;
            dynamicFieldB(countB);
        });

        //remove row for Party A
        $(document).on('click', '.remove-party-b', function(){
            countB--;
            $(this).closest("tr").remove();
        });
        

    });

    function dynamicFieldA(count)
    {
        let dynamicField = '';
        
        dynamicField = '<tr><td>'+count+'</td><td><input type="text" id="payerID" name="payer_id[]" class="form-control" required></td><td><input type="text" id="firstname" name="firstname[]" class="form-control"></td><td><input type="text" id="business_or_last_name" name="business_or_last_name[]" class="form-control" required></td><td><input type="tel" id="phone_no" maxlength="11" name="phone_no[]" class="form-control phone_no" required></td><td><input type="email" id="email" name="email[]" class="form-control" required></td><td><input type="text" id="address" name="address[]" class="form-control" required></td><td><button class="btn btn-danger btn-sm remove-party-a">x</button></td></tr>';
            
        $('#party-a-dynamic-fields').append(dynamicField);

    }

    function dynamicFieldB(countB){

        let dynamicFieldB = '';

        dynamicFieldB = '<tr><td>'+countB+'</td><td><input type="text" id="party_b_payer_id" name="party_b_payer_id[]" class="form-control" required></td><td><input type="text" id="party_b_business_or_last_name" name="party_b_business_or_last_name[]" class="form-control"></td><td><input type="text" id="party_b_firstname" name="party_b_firstname[]" required="required" class="form-control"></td><td><input type="tel" id="party_b_phone_no" maxlength="11" name="party_b_phone_no[]" class="form-control party_b_phone_no" ></td><td><input type="email" id="party_b_email" name="party_b_email[]" class="form-control" ></td><td><input type="text" id="party_b_address" name="party_b_address[]" class="form-control"></td></td><td><button class="btn btn-danger btn-sm remove-party-b">x</button></td></tr>';

        $('#party-b-dynamic-fields').append(dynamicFieldB);

                                        
    }


    function resetForm(){
        document.getElementById('partyform').reset();
    }
</script>
@endsection