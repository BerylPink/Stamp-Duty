@include('layouts.partials._messages')
{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Stamp Duty History')
@section('content')
    <style>
        a:hover{
            color: blue;
        }
    </style>
    <!--MAIN CONTENT AREA-->

    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Stamp Duty History
                    </h1>	
                <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/stamp-duty-history') }}"> Stamp Duty History</a></p>
                </div>											
            </div>
        </div>
    </section>

    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">
                    <a style ="color:black; text-align:center" href="/transac-individual">These are your existing Stamp Duty... Click here for another Assessment...</a></h3>
                <div class="progress-table-wrap">
                    @include('layouts.partials._messages')
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Transaction Date</div>
                            <div class="visit">Actions</div>
                        </div>
                        {{-- @foreach($stampDutyHistories as $stampDutyHistory) --}}
                            <div class="table-row">
                                <div class="serial">{{ ++$i }}</div>
                                <div class="country">{{ \Carbon\Carbon::parse($stampDutyHistory->created_at , 'UTC')->isoFormat('LLLL') }}</div>
                                <div class="visit">
                                    <a style ="color:red;" class="nav-link" style="cursor: pointer" href="{{ route('invoice', $stampDutyHistory->id) }}">
                                        Invoice
                                    </a>
                                    <!-- <a style ="color:red;" class="nav-link" style="cursor: pointer" href="{{ route('certificate', $stampDutyHistory->id) }}">
                                        Print Certificate
                                    </a> -->
                                </div>
                            </div>
                        {{-- @endforeach --}}
                    </div>
                </div>

            </div>
            {{-- <span class="d-flex justify-content-end" style="margin-bottom: 11px !important;">{{ $stampDutyHistories->links() }}</span> <br> --}}
        </div>
    </div>

    
@endsection