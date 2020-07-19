{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Services')
@section('content')

    <style>
        a:hover{
            color: blue;
        }
    </style>
    <!--MAIN CONTENT AREA-->
    <hr/>

    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Services				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('transac-individual') }}"> Services</a></p>
                </div>	
            </div>
        </div>
    </section>


    <section class="service-page-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9 pb-40 header-text text-center">
                    <h1 class="pb-10">Our Offered Services are Listed...</h1>
                    <p>
                        Select a Service to get accessed and remember our Primary responsibilities includes collecting and
                        accounting for all internally generated revenue due to the Kaduna
                        State Government within and outside the State...
                    </p>
                </div>
            </div>						
            <div class="progress-table-wrap">
            @include('layouts.partials._messages')
            <div class="progress-table">
                <div class="table-head">
                    <div class="serial">S/N</div>
                    <div class="country">Name</div>
                    <div class="visit">Rate</div>
                    <div class="visit">Extra Copy</div>
                </div>
                @foreach($transactions as $transaction)
                    <div class="table-row">
                        <div class="serial">{{ ++$i }}</div>
                        <div class="country"><a class="nav-link" style="cursor: pointer" href="{{ route('assessments.show', $transaction->id) }}">{{ $transaction->name}}</a></div>
                        <div class="visit">{{ $transaction->rate }}</div>
                        <div class="visit">{{ $transaction->extra_copy }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <span class="d-flex justify-content-end" style="margin-bottom: 11px !important;">{{ $transactions->links() }}</span> <br>

    </div>

    </section>
    <!-- End service-page Area -->

@endsection