{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'About')
@section('content')

    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('about') }}"> About Us</a></p>
                </div>	
            </div>
        </div>
    </section>

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 home-about-left">
                    <img class="mx-auto d-block img-fluid" src="{{ asset('uploads/kaduna-state.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 home-about-right">
                    <h6 class="text-uppercase">What you need to Know about us</h6><br/>
                    <p>
                        Prior to 1985, the Kaduna state Board of Internal Revenue was a
                        division under the Ministry of Finance and Economic Planning, and
                        then headed by a Commissioner of Revenue who is directly
                        answerable to Hon. Commissioner, Ministry of Finance and Economic
                        Planning. &nbsp;Since then the Board have been undergoing with
                        restructuring to suit challenges.
                    </p>
                    <p>
                        The Board has the singular responsibilities of collection and
                        accounting for all internally generated revenue due to the Kaduna
                        State Government within and outside the State. &nbsp;The Board was
                        then headed by a Director-General being supervised by the Hon.
                        Commissioner of Finance.
                    </p>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-about Area -->
    
    <!-- video section -->
    <section class="about-video-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-video-left">
                    <h6 class="text-uppercase">Kaduna Revenue</h6><br/>
                    <p>
                        The Management is responsible for appointment, Promotions,
                        Discipline, and award of contract. &nbsp;However the
                        Director-General have executive power. In a quest to meet up with
                        challenges and economic evolutions and globalization. The Board
                        has been undergoing series of restructuring which presently pave
                        way for modernization and changing to electronic operations to
                        enhance service delivery, maximize revenue collections and block
                        leakages.
                    </p>
                    <p>Historically, the administration of taxes and its collection and
                        accounting in Kaduna State prior to 1985, was the sole
                        responsibility of the Ministry of Finance and Economic
                        Planning.</p>
                    
                </div>
                <div class="col-lg-6  justify-content-center align-items-center d-flex">
                    <img class="img-fluid mx-auto" src="{{ asset('uploads/zaria-kaduna.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End about-video

@endsection