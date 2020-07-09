@include('layouts.partials._messages')
@extends('layouts.mainlayout')
@section('content')
    <style>
        a:hover{
            color: blue;
        }
    </style>
    <!--MAIN CONTENT AREA-->
    <hr/>
    <div class="container d-flex justify-content-center">
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
                            <!--------- Individual Transactions -->
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
                                                <td><a class="nav-link" style="cursor: pointer" href="{{ route('assessments.index') }}">{{ $transaction->name}}</a></td>
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
    </div>

    
@endsection