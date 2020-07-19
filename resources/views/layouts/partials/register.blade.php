
            <div class="modal in fade" style="margin-top: 70px;" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold" id="loginModal">{{ __('Register') }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
            
            
            <div class="modal-body modal-xl">
            <form method="POST" id="registerForm" action="{{ route('create.user') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="pull-left">{{ __('First Name') }}</label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <input id="firstname" name="firstname" type="text"
                                class="form-control @error('firstname') is-invalid @enderror"
                                value="{{ old('firstname') }}" />

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="pull-left">{{ __('Last Name') }}</label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <input id="lastname" name="lastname" type="text"
                                class="form-control @error('lastname') is-invalid @enderror"
                                value="{{ old('lastname') }}" />

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="pull-left">{{ __('Phone Number') }}</label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <input id="phone_no" name="phone_no"  type="tel"
                                class="form-control" required="true" value="{{ old('phone_no') }}" maxlength="11" />

                            @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="pull-left">{{ __('E-Mail Address') }}</label> <span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <input id="email" name="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="pull-left">{{ __('Password') }}</label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>

                            <input id="password" name="password" minlength="5" type="password" class="form-control @error('password')is-invalid @enderror">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="col-md-4">
                            <label class="pull-left">{{ __('Confirm Password') }}</label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <input id="confirm_password" name="confirm_password" minlength="5" type="password"
                                class="form-control @error('confirm_password')is-invalid @enderror" />
                            @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="pull-left">Address </label><span
                                style="color:red; font-size:25px; margin-bottom:-10px" class="pull-left">*</span>
                            <textarea id="address" name="address" placeholder="Enter Address" type="text"
                                class="md-textarea form-control @error('address') is-invalid @enderror"
                                rows="2">{{ old('address') }}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="pull-left">Gender</label>
                            <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" />
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="col-md-6">
                            <label class="pull-left">Local Government</label>
                            <select id="tbl_lga_id" name="tbl_lga_id" class="form-control @error('tbl_lga_id') is-invalid @enderror" />
                                <option value="">Select L.G.A</option>
                            @foreach ($tbl_lga as $lga)
                                <option value="{{ $lga->id }}">{{ $lga->descrp }}</option>
                            @endforeach
                            {{--  @foreach ($tbl_lga ?? ''  as $tbl_lga ?? '' )
                                    <option value="{{ $tbl_lga ?? ''->id }}">{{ $tbl_lga ?? ''->descrp }}</option>
                            @endforeach --}}

                            </select>
                            @error('tbl_lga_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row mb-2 mt-5 text-center">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary ">
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
