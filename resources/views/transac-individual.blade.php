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

    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">
                    <a href="/transac-individual">Individual Transactions </a></h3>
                <div class="progress-table-wrap">
                    @include('layouts.partials._messages')
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
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

            </div>
            <span class="d-flex justify-content-end" style="margin-bottom: 11px !important;">{{ $transactions->links() }}</span> <br>
        </div>
    </div>

    {{-- <div class="container d-flex justify-content-center">
        <!-- Tables -->
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <div class="section-head active">
                        <ul>                                   
                            <li class="{{ Route::currentRouteNamed('transac-individual') ? 'active' : '' }}">
                                <a href="/transac-individual">Individual Transactions </a></li>
                            
                        </ul>
                    </div>
                    <hr/>

                    <div class="section-body table-responsive">
                        <div class="tab-content">
                                <div class="col-lg-12">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Rate</th>
                                                <th>Extra Copy</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td><a class="nav-link" style="cursor: pointer" href="{{ route('assessments.show', $transaction->id) }}">{{ $transaction->name}}</a></td>
                                                <td>{{ $transaction->rate }}</td>
                                                <td>{{ $transaction->extra_copy }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                            </div>
                        </div>
                        <span class="d-flex justify-content-end">{{ $transactions->links() }}</span> 

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    
@endsection