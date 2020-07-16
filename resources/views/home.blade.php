@include('layouts.partials._messages')
{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Home')
@section('content')

   <!--page_container-->
   {{-- <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>STAMP DUTY</h1>
                        <p>Obtain your stamp duty at the comfort of your room, do it now online.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-2.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-3.jpg') }}"></div>
        </div>
    </section> --}}

    {{-- <section class="services-section spad mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Welcome to our Stamp duty Services</span>
                        <h2>Verify your Stamp Duty Certificate Number, check out our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>List of Services and Rates</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Register Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row fullscreen d-flex align-items-center justify-content-start" style="height: 720px;">
                <div class="banner-content col-lg-12">
                    <h6>Introducing</h6>
                    <span class="bar"></span>
                    <h1 class="text-white">
                        Kaduna State <br>
                        Stamp Duty Service
                    </h1>
                <a href="{{ route('about') }}" class="genric-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 home-about-left">
                    <img class="mx-auto d-block img-fluid" src="img/about-img.png" alt="">
                </div>
                <div class="col-lg-6 home-about-right">
                    <h6 class="text-uppercase">Brand new app to blow your mind</h6>
                    <h1>We’ve made a life <br>
                    that will change you</h1>
                    <p>
                        <span>We are here to listen from you deliver exellence</span>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.
                    </p>
                    <a class="primary-btn" href="#">Get Started Now</a>
                </div>
            </div>
        </div>	
    </section>

@endsection
