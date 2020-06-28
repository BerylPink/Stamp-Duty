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
                            <li class="{{ Route::currentRouteNamed('transac-bulk') ? 'active' : '' }}"><a href="/transac-bulk" > Bulk Transactions</a></li>
                        </ul>
                    </div>
                    <hr/>

                    <div class="section-body table-responsive">
                        <div class="tab-content">

                            <!-- Bulk Transactions starts Here -->

                            <table id="example"
                                    class="table  table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Rate</th>
                                    <th>Extra Copy</th>

                                </tr>
                                </thead>

                                        
                                    <tr>
                                        <td><a style="font-weight:bold; color:black"
                                                href="bulk_transaction39808 ">
                                            <i class="fa fa-arrow-right" style="color: #00aa00"></i>
                                                Contract Agreement</a>
                                        </td>
                                        <td>Ad Valorem</td>
                                        <td>1.0%</td>
                                        <td>N50.00</td>

                                    </tr>
                                        

                            </table>

                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
                            

@endsection