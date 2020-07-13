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
                            <li class="{{ Route::currentRouteNamed('stamp-duty-history') ? 'active' : '' }}">
                                <a href="/stamp-duty-history">Stamp Duty History </a></li>
                            
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
                                                <th>Transaction Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            @foreach($stampDutyHistories as $stampDutyHistory)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <?php                                  
                                                        $date = \Carbon\Carbon::parse($stampDutyHistory->created_at , 'UTC');
                                                        // echo $date->isoFormat('MMMM Do YYYY h:mm:ss');
                                                        echo $date->isoFormat('LLLL');
                                                    ?>
                                                </td>

                                                <td>
                                                    <a class="nav-link" style="cursor: pointer" href="{{ route('invoice', $stampDutyHistory->id) }}">
                                                        Print Invoice
                                                    </a>
                                                    <a class="nav-link" style="cursor: pointer" href="{{ route('certificate', $stampDutyHistory->id) }}">
                                                        Print Certificate
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                            </div>
                        </div>
                        <span class="d-flex justify-content-end">{{ $stampDutyHistories->links() }}</span> 

                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection