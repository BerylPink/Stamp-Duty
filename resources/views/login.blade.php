@extends('layouts.mainlayout')
@section('content')
    
    <div class="container read-header"> 
        <div class="col-lg-7"><h3>Login</h3></div>   
            <div class="card-body">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-lg-11">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col-lg-11">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="col-lg-12">
                            <button type="submit">LogIn</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection