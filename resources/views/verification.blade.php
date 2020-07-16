{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Services')
@section('content')

    <hr/>
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Integrated Stamp Duty Services - Verification				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('verification') }}"> Verification</a></p>
                </div>	
            </div>
        </div>
    </section>

    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Stamp Duty Certificate Number</h3>
                        <form action="#">
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Stamp Duty Certificate Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Stamp Duty Certificate Number'" required="" class="single-input">
                            </div><br>
                            <a href="#" class="genric-btn primary">Submit</a>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
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

        

        

    </div> --}}

@endsection