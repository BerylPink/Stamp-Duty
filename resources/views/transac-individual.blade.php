@extends('layouts.mainlayout')
@section('content')
    
    <!--MAIN CONTENT AREA-->
    <div class="container">
        <!-- Tables -->
        <div class="row">
            <div class="col-lg-10">
                <div class="section">
                    <div class="section-head active">
                        <ul>                                   
                            <li class="{{ Route::currentRouteNamed('transac-individual') ? 'active' : '' }}"><a href="/transac-individual">Individual Transactions </a></li>
                            <!-- <li class="{{ Route::currentRouteNamed('transac-bulk') ? 'active' : '' }}"><a href="/transac-bulk" > Bulk Transactions</a></li> -->
                        </ul>
                    </div>
                    <hr/>

                    <div class="section-body table-responsive">
                        <div class="tab-content">
                            <!--------- Individual Transactions -->
                                <div class="col-lg-12">
                                    <table id="example" class="table  table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Rate</th>
                                                <th>Extra Copy</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $transaction->name}}</td>
                                                <td>{{ $transaction->rate_type }}</td>
                                                <td>{{ $transaction->rate }}</td>
                                                <td>{{ $transaction->extra_copy }}</td>
                                            </tr>
                                
                                        </tbody>

                                    </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection