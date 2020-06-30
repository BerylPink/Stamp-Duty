<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corporate Account - Dashbord</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 10vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a></a>
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

            <div class="container">
                <div class=" col-lg-12">
                    <h2>Company Details</h2>
                    <table id="example" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Company Name</th>
                                <td></td>
                            </tr>
                            <tr>
                            <th>TIN Number</th>
                            <td></td>
                            </tr>
                            <tr>
                            <th>Email</th>
                            <td></td>
                            </tr>
                            <tr>
                            <th>Phone Number</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>CAC Number</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Date of Incorporation</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class=" col-lg-12">
                    <h2>Contact Person Details</h2>
                    <table id="example" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Full Name</th>
                                <td></td>
                            </tr>
                            <tr>
                            <th>Email</th>
                            <td></td>
                            </tr>
                            <tr>
                            <th>Phone Number</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
