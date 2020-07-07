@extends('layouts.mainlayout')
@section('content')
    
    
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
                    <h2>Contact Info</h2>
                    <p>To become the most efficient and innovative revenue generation agency in Nigeria built on Prompt Services, Integrity, Teamwork and Innovation.</p>
                    <table>
                        <tbody>
                            <tr>
                                <td class="c-o">Address:</td>
                                <td>1st floor obasanjo house, yakubu gowon way, kaduna</td>
                            </tr>
                            <tr>
                                <td class="c-o">Phone:</td>
                                <td>(12) 345 67890</td>
                            </tr>
                            <tr>
                                <td class="c-o">Email:</td>
                                <td>kadris.info@gmail.com</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @else

                <form action="contact" class="contact-form" method="post">

                   {{ @csrf_field () }}

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" id = "name" required placeholder="Your Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" id = "email" required placeholder="Your Email">
                        </div>
                        <div class="col-lg-12">
                            <textarea id = "message" required placeholder="Your Message"></textarea>
                            <button type="submit" value = "submit">Submit Now</button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
        <hr/>
        
    </div>
@endsection