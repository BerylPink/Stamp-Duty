@include('layouts.partials._messages')
{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Home')
@section('content')

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

    <!-- Start about-video Area -->
    <section class="about-video-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-video-left">
                    <h6 class="text-uppercase">All about Stamp duty with Kaduna</h6>
                    <h1>
                        We’ve made Staping Easy 
                    </h1>
                    <p>
                        In 1985 the Kaduna State Government enacted an Edict known as
                        Edict N0. 5 of 1985 which created Kaduna State Board of Internal
                        Revenue with the Sole responsibilities of administration of Taxes
                        in accordance with the various legislation regarding taxes.
                    </p>
                    <p>The Director-General preside the meeting of the Management which
                        comprises all the Head of Department.</p>
                    <a class="primary-btn" href="#">Get Started Now</a>
                </div>
                <div class="col-lg-6  justify-content-center align-items-center d-flex">
                    <img class="img-fluid mx-auto" src="{{ asset('uploads/zaria-kaduna.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End about-video Area -->

@endsection
