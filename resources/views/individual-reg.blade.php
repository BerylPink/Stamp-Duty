@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <!-- Tables -->
        <div class="row">
            <div class="col-lg-10">
                <div class="section">
                    <div class="section-head active">
                        <ul>                                   
                            <li class="active"><a href="/individual">Individual Account </a></li>
                            <li><a href="/corporate" > Corporate Account</a></li>
                        </ul>
                    </div>
                    <hr/>

                    <!-- Section body -->
                    <div class="section-body">
                        <div class="tab-content">
                        <!-- Individual registration -->
                            <form action="#" class="contact-form">                                       
                                <div class="row">
                                    <div class="form-group col-lg-7">
                                        <div class="input-group">
                                            <input id="individualTin" name="tinNo" placeholder="Enter your TIN" class="form-control" type="text" value=""/>
                                            <button class="input-group-addon">Retrieve TIN Information</button>
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        </div>
                                        <div class="col-sm-1">
                                            <span id="tspinner" style="display:none"><i
                                                    class="fa fa-spinner fa-spin fa-2x fa-fw"
                                                    aria-hidden="true"></i></span>
                                            <span id="tcheck" style="display:none">
                                                <i class="fa fa-check fa-2x" aria-hidden="true" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>First Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="firsfullname" name="firstname" data-validation="required" data-validation-error-msg="Please enter your TIN first and the system will retrieve your full name details." placeholder="Full Name" class="form-control" required="true" type="text" value=""/>
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label>Last Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="firsfullname" name="firstname" data-validation="required" data-validation-error-msg="Please enter your TIN first and the system will retrieve your full name details." placeholder="Full Name" class="form-control" required="true" type="text" value=""/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>Phone Number</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="phonenumber" name="phone" data-validation="required" data-validation-error-msg="Phone Number is required" placeholder="Phone Number" type="text" class="form-control" required="true" value="" maxlength="13"/>
                                        <input id="visiblephonenumber" name="visiblephone" type="hidden" value=""/>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <label>Email</label><span
                                            style="color:#dfa974;; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input type="hidden" name="type" value="individual"/>
                                        <input type="hidden" name="id" value=""/>
                                        <input id="individualemail" name="email" data-validation="email" data-validation-error-msg="You did not enter a valid e-mail" placeholder="Email" type="email" class="form-control email" required="true" value=""/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4 ">
                                        <label class="pull-left">Gender</label>
                                        <select id="gender" name="gender" data-validation="required" value=""/>
                                            <option value="SELECT">Select Gender</option>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 ">
                                        <label class="pull-left">Country of Residence</label>
                                        <select id="gender" name="gender" data-validation="required" value=""/>
                                            <option value="SELECT">Select Country</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 ">
                                        <label class="pull-left">State</label>
                                        <select id="gender" name="gender" data-validation="required" value=""/>
                                            <option value="SELECT">Select State</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                                    
                            <hr/>
                            <div class="panel">
                                <div class="section-head">
                                    <ul>                                   
                                        <li class="active"><a href="/">ACCOUNT CREDENTIALS</a></li>
                                    </ul>
                                </div>

                                <div class="section-body">
                                    <div class="tab-content">
                                        <form action="#" class="contact-form">                                       
                                            <div class="row">
                                                <div class="form-group col-lg-4 ">
                                                    <label>Username</label><span
                                                        style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                                        class="pull-right">*</span>
                                                    <input id="iusername" name="iusername" data-validation="required" placeholder="Username" class="form-control username" required="true" type="text" value=""/>
                                                </div>

                                                <div class="form-group col-lg-4 ">
                                                    <label>Password</label><span
                                                        style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                                        class="pull-right">*</span>
                                                    <input id="password" name="password" minlength="8" data-validation="required" placeholder="Password" type="password" class="form-control" required="true" value=""/>
                                                </div>
                                                <div class="form-group col-lg-4 ">
                                                    <label>Confirm Password</label><span
                                                        style="color:red; font-size:25px; margin-bottom:-10px"
                                                        class="pull-right">*</span>
                                                    <input id="passwordV" name="passwordV" minlength="8" data-validation="required" data-validation-error-msg="Confirm Password is required" placeholder="Confirm Password " type="password" class="form-control" required="true" value=""/>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>       
                                </div>           
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection