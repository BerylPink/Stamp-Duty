@extends('layouts.mainlayout')
@section('title', 'Create Corporate Account')
@section('content')

    <div class="container">
        <!-- Tables -->
        <div class="row">
            <div class="col-lg-10">
                <div class="section">
                    <div class="section-head active">
                        <ul>                                   
                            <li class="{{ Route::currentRouteNamed('individual-reg') ? 'active' : '' }}"><a href="{{ route('individual-reg') }}">Individual Account </a></li>
                            <li class="{{ Route::currentRouteNamed('corporate-reg') ? 'active' : '' }}"><a href="{{ route('corporate-reg') }}" > Corporate Account</a></li>
                        </ul>
                    </div>
                    <hr/>

                    <!-- Section body -->
                    <div class="section-body">
                        <div class="tab-content">
                        {{-- @include('layouts.partials._messages') --}}

                            <!-- Corperate registration -->
                        <form method="POST" action="{{ route('corporate-account.store') }}" class="contact-form">        
                                @csrf                               
                            
                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>TIN Number</label>
                                        <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="tin_number" name="tin_number" placeholder="Enter yout TIN Number" class="form-control @error('tin_number') is-invalid @enderror" type="tel"  value="{{ old('tin_number') }}" />
                                        @error('tin_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label>Name of Institution</label>
                                        <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="institution_name" name="institution_name" placeholder="Institution Name" class="form-control @error('institution_name') is-invalid @enderror" type="text"  value="{{ old('institution_name') }}" />
                                        @error('institution_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>Email</label>
                                        <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="email" name="email" placeholder="Enter Email Address Here" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label>Phone Number</label>
                                        <span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="phone_no" name="phone_no" placeholder="Enter Phone Number" type="tel" class="form-control" required="true" value="{{ old('phone_no') }}" maxlength="11" />
                                        @error('phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12 ">
                                        <label>Office Address</label><span
                                            style="color:red;; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                            <textarea id="address" name="address" placeholder="Enter the Corporate Address here" class="form-control @error('address') is-invalid @enderror">
                                                {{ old('address') }}
                                            </textarea>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label class="pull-left">Country of Residence</label>
                                        <select id="country_id" name="country_id" class="@error('country_id') is-invalid @enderror"/>
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->CountryID }}">{{ $country->Name }}</option>                                
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label class="pull-left">State</label>
                                        <select id="states_id" name="states_id" class="@error('states_id') is-invalid @enderror"/>
                                            <option value="">Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->StateID }}">{{ $state->StateName }}</option>                                
                                            @endforeach
                                        </select>
                                        @error('states_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label for="exampleInputEmail3">CAC Registration Number </label><span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="CAC_registration_number" name="CAC_registration_number" placeholder="Enter your corporate RC/BN/IT Number here" type="text" class="form-control @error('CAC_registration_number') is-invalid @enderror" value="{{ old('CAC_registration_number') }}" />
                                        @error('CAC_registration_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 ">
                                        <label for="exampleInputEmail3">Date of Incorporation </label><span style="color:red; font-size:25px; margin-bottom:-10px" class="pull-right">*</span>
                                        <input id="date_of_incorporation" name="date_of_incorporation"  placeholder="Enter Company Incorporation Date" type="date" class="form-control @error('date_of_incorporation') is-invalid @enderror" value="{{ old('date_of_incorporation') }}"/>
                                        @error('date_of_incorporation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            <hr/>

                            <div class="panel">
                                <div class="section-head">
                                    <ul><li class="active"><a href="/">Contact Person's Information</a></li></ul>
                                </div>
                            
                                <div class="row">

                                    <div class="form-group col-lg-4 ">
                                        <label>First Name</label><span
                                            style="color:red; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                    <input id="firstname" name="firstname" placeholder="Enter your first name here" type="text" class="form-control @error('firstname') is-invalid @enderror"  value="{{ old('firstname') }}"/>
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label>Middle Name</label><span
                                            style="color:red; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="middlename" name="middlename" placeholder="Enter your middle name here" type="text" class="form-control @error('middlename') is-invalid @enderror"  value="{{ old('middlename') }}"/>
                                        @error('middlename')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label>Last Name</label><span
                                            style="color:red; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="lastname" name="lastname" placeholder="Enter your surname here" type="text" class="form-control @error('lastname') is-invalid @enderror"  value="{{ old('lastname') }}"/>
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 ">
                                        <label>Email</label><span
                                            style="color:red; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contact_email" name="contact_email" placeholder="Enter your email address here" type="email" class="form-control @error('contact_email')is-invalid @enderror"  value="{{ old('contact_email') }}"/>
                                        @error('contact_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <label>Phone</label><span
                                            style="color:red; font-size:25px; margin-bottom:-10px"
                                            class="pull-right">*</span>
                                        <input id="contact_phone_no" name="contact_phone_no" placeholder="Enter your phone number here" type="text" class="form-control @error('contact_phone_no')is-invalid @enderror" value="{{ old('contact_phone_no') }}"  maxlength="11"/>
                                        @error('contact_phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr/>
                            
                            <div class="panel">
                            <div class="section-head">
                                <ul><li class="active"><a href="/">ACCOUNT CREDENTIALS</a></li></ul>
                            </div>

                            <div class="section-body">
                                <div class="tab-content contact-form">
                                        <div class="row">
                                            <div class="form-group col-lg-4 ">
                                                <label>Username</label><span
                                                    style="color:red; font-size:25px; margin-bottom:-10px"
                                                    class="pull-right">*</span>
                                            <input id="username" name="username" placeholder="Username" class="form-control @error('username')is-invalid @enderror" type="text" value="{{ old('username') }}"/>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-lg-4 ">
                                                <label>Password</label><span
                                                    style="color:red; font-size:25px; margin-bottom:-10px"
                                                    class="pull-right">*</span>
                                                <input id="password" name="password" minlength="8" placeholder="Password" type="password" class="form-control @error('password')is-invalid @enderror">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-lg-4 ">
                                                <label>Confirm Password</label><span
                                                    style="color:red; font-size:25px; margin-bottom:-10px"
                                                    class="pull-right">*</span>
                                                <input id="confirm_password" name="confirm_password" minlength="8" placeholder="Confirm Password" type="password" class="form-control @error('confirm_password')is-invalid @enderror" />
                                                @error('confirm_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit">Create Account!</button>
                                            </div>
                                        </div>
                                </div>       
                            </div>    
                        </form>

                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // $('#colleges_id').on('change',function () {
        //      let college_id = $('#colleges_id').find('option:selected').val();
        //      $.ajaxSetup({
        //          headers: {
        //              'X-CSRF_TOKEN':$('meta[name="csrf-token"]').attr('content')
        //          }
        //      });
     
        //      $.ajax({
        //          url: "",
        //          method: "GET",
        //          dataType: "JSON",
        //          data: {college_id:college_id},
        //          success: function(data){
        //              if(data){
        //                  $('#departments_id').html(data.collegeDepartment);
        //              }
        //          },
        //      })
        //  })
     
         $('#country_id').on('change',function () {
             let country_id = $('#country_id').find('option:selected').val();
             if(country_id != 156){
                 $('#states_id').prop('selectedIndex', 1).val();
             }else{
                 $('#states_id').prop('selectedIndex', 0).val();
             }
         })
     
     </script>
@endsection