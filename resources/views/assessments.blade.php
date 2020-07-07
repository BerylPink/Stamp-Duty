@extends('layouts.mainlayout')
@section('content')

    <hr/>
    <div class="section-body table-responsive">
        <div class="tab-content">
            <div class="col-lg-12">
                <h4 class="d-flex justify-content-center">Stamp Duty Assessment</h4>
                <br />
                <form id="partyform" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Party A</h5>
                            <br/>
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Payer ID</th>
                                        <th>Business/Last Name</th>
                                        <th>First names</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Business/Residential Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" id="payerID" name="payerID" class="form-control" placeholder="Payer ID">
                                        </td>
                                        <td>
                                            <input type="text" id="firstname" name="firstname" required="required" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="lastname" name="lastname" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="phone" name="phone" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="email" name="email" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="address" name="address" class="form-control" >
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
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Payer ID</th>
                                        <th>Business/Last Name</th>
                                        <th>First names</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Business/Residential Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" id="payerID" name="payerID" class="form-control" placeholder="Payer ID">
                                        </td>
                                        <td>
                                            <input type="text" id="firstname" name="firstname" required="required" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="lastname" name="lastname" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="phone" name="phone" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="email" name="email" class="form-control" >
                                        </td>
                                        <td>
                                            <input type="text" id="address" name="address" class="form-control" >
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



                            <form method="POST" class="contact-form">  
                            @csrf                                     
                              
                                <div class="row">
                                    <div class="form-group col-lg-3 ">
                                        <label>Transaction Date</label>
                                        <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input type="date" id="date" name="date"  class="form-control" />
                                       
                                    </div>

                                    <div class="form-group col-lg-3 ">
                                        <label>Instrument Type</label>
                                        <input  class="form-control" id="instrument" type="text" placeholder="Admission Fee" disabled />
                        
                                    </div>

                                    <div class="form-group col-lg-3 ">
                                        <label>Consideration Amount and Value</label>
                                        <input id="amount" name="amount" placeholder="Admission fee amount" type="text" class="form-control" disabled />
                                    
                                    </div> 

                                    <div class="form-group col-lg-3 ">
                                        <label class="pull-left">Number of Extra Copy <span style="color:red; font-size:13px;" >₦50/copy</span></label>
                                        <input type="extracopy" id="extracopy" name="extracopy"  class="form-control" value="0"/>
                                        
                                    </div>
                                </div>

                            </form>
                        

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12"></label>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <label class="checkbox-inline checkbox-custom">
                                            <input type="checkbox" id="chkcapitalgain" name="chkcapitalgain" value="1"><i></i> ADD CAPITAL GAIN TAX?
                                        </label>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-center">
                                   
                                        <button type="button" id="reset" class="btn btn-danger" ><span class="fa fa-refresh"></span> Reset </button>
                                        <span>  </span>
                                        <button type="button" id="pay" class="btn btn-success btnsubmit" > Pay now</button>
                        
                                        </div>
                                    </div>
                                </div>
                                <br/><br/>
                                <hr/>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
  
    </div>
                        

@endsection