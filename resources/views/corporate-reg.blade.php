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
                            <!-- Corperate registration -->
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
                                    <div class="form-group col-lg-12 ">
                                        <label>Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="firsfullname" name="firstname" data-validation="required" data-validation-error-msg="Please enter your TIN first and the system will retrieve your full name details." placeholder="Institution Name" class="form-control" required="true" type="text" value=""/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>Email</label><span
                                            style="color:#dfa974;; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input type="hidden" name="type" value="coporate"/>
                                        <input type="hidden" name="id" value=""/>
                                        <input id="corporateemail" name="email" data-validation="email" data-validation-error-msg="You did not enter a valid e-mail" placeholder="Enter Email Address Here" type="email" class="form-control email" required="true" value=""/>
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label>Phone Number</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="phonenumber" name="phone" data-validation="required" data-validation-error-msg="Phone Number is required" placeholder="Enter Phone Number" type="text" class="form-control" required="true" value="" maxlength="13"/>
                                        <input id="visiblephonenumber" name="visiblephone" type="hidden" value=""/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12 ">
                                        <label>Office Address</label><span
                                            style="color:#dfa974;; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                            <textarea id="companyaddress" name="address" data-validation="required" data-validation-error-msg="Address is required" placeholder="Enter the Corporate Address here" class="form-control" required="true"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label class="pull-left">Country of Residence</label>
                                        <select id="gender" name="gender" data-validation="required" value=""/>
                                            <option value="SELECT">Select Country</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label class="pull-left">State</label>
                                        <select id="gender" name="gender" data-validation="required" value=""/>
                                            <option value="SELECT">Select State</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label for="exampleInputEmail3">CAC Registration Number </label><span style="color:#dfa974; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="canregno" name="cacRegNo" data-validation="required" data-validation-error-msg="CAC Number is required" placeholder="Enter your corporate RC/BN/IT Number here" type="text" class="form-control" required="true" value=""/>
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label for="exampleInputEmail3">Date of Incorporation </label><span style="color:#dfa974; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="dateOfIncorporation" name="dateOfIncorporation" data-validation="required" data-validation-error-msg="Incopration Date is required" placeholder="Enter Company Incorporation Date" type="text" class="form-control" required="true" value=""/>
                                    </div>
                                </div>

                            </form>

                            <hr/>

                            <div class="panel">
                                <div class="section-head">
                                    <ul><li class="active"><a href="/">Contact Person's Information</a></li></ul>
                                </div>
                            
                                <div class="row">

                                    <div class="form-group col-lg-4 ">
                                        <label>First Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contactPersonFirstname" name="contactPersonFirstname" data-validation="required" data-validation-error-msg="First Name is required" placeholder="Enter your first name here" type="text" class="form-control" required="true" value=""/>
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label>Middle Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contactPersonMiddlename" name="contactPersonMiddlename" placeholder="Enter your middle name here" type="text" class="form-control" value=""/>
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label>Last Name</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contactPersonLastname" name="contactPersonLastname" data-validation="required" data-validation-error-msg="Last Name is required" placeholder="Enter your surname here" type="text" class="form-control" required="true" value=""/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>Email</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contactPersonEmail" name="contactPersonEmail" data-validation="email" data-validation-error-msg="Enter a valid email" placeholder="Enter your email address here" type="email" class="form-control" required="true" value=""/>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <label>Phone</label><span
                                            style="color:#dfa974; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contactPersonPhone" name="contactPersonPhone" data-validation="text" data-validation-error-msg="Phone Number is required" placeholder="Enter your phone number here" type="text" class="form-control number" required="true" value="" maxlength="13"/>
                                    </div>
                                </div>
                            </div>

                            <hr/>
                            
                            <div class="panel">
                            <div class="section-head">
                                <ul><li class="active"><a href="/">ACCOUNT CREDENTIALS</a></li></ul>
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