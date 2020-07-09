@extends('layouts.mainlayout')
@section('content')
    
    <section class="hero-section">
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
    </section>
     
     
     <!-- Breadcrumb Section Begin -->
     <div class="breadcrumb-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>What you need to know About KADIRS</h2>
                        <div class="bt-option">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    
    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                       
                            
                            <p> Prior to 1985, the Kaduna state Board of Internal Revenue was a
                                division under the Ministry of Finance and Economic Planning, and
                                then headed by a Commissioner of Revenue who is directly
                                answerable to Hon. Commissioner, Ministry of Finance and Economic
                                Planning. &nbsp;Since then the Board have been undergoing with
                                restructuring to suit challenges.</p>

                                <p>
                                In 1985 the Kaduna State Government enacted an Edict known as
                                Edict N0. 5 of 1985 which created Kaduna State Board of Internal
                                Revenue with the Sole responsibilities of administration of Taxes
                                in accordance with the various legislation regarding taxes.<br />
                                </p>

                                <p>
                                The Board has the singular responsibilities of collection and
                                accounting for all internally generated revenue due to the Kaduna
                                State Government within and outside the State. &nbsp;The Board was
                                then headed by a Director-General being supervised by the Hon.
                                Commissioner of Finance.<br />
                                </p>

                    </div>
                    <div class="col-lg-5 offset-lg-1">
                    <p>
                        The Director-General preside the meeting of the Management which
                        comprises all the Head of Department.<br />
                        </p>
                        <p>
                        The Management is responsible for appointment, Promotions,
                        Discipline, and award of contract. &nbsp;However the
                        Director-General have executive power. In a quest to meet up with
                        challenges and economic evolutions and globalization. The Board
                        has been undergoing series of restructuring which presently pave
                        way for modernization and changing to electronic operations to
                        enhance service delivery, maximize revenue collections and block
                        leakages.<br />
                        </p>

                        <p>
                        Historically, the administration of taxes and its collection and
                        accounting in Kaduna State prior to 1985, was the sole
                        responsibility of the Ministry of Finance and Economic
                        Planning.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    {{-- <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3>Restaurants Services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3>Event & Party</h3>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    
@endsection