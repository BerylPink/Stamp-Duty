{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.new-layout')
@section('title', 'Contact Us')
@section('content')
    
    
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us
                    </h1>	
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('contact-us') }}"> Contact Us</a></p>
                </div>											
            </div>
        </div>
    </section>

    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Address:</h5>
                            <p>1st floor obasanjo house, yakubu gowon way, kaduna</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Phone:</h5>
                            <p>(12) 345 67890</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Email:</h5>
                            <p>kadris.info@gmail.com</p>
                        </div>
                    </div>														
                </div>
                <div class="col-lg-8">
                    <form class="form-area " id="myForm" action="mail.php" method="post">
                        <div class="row">	
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                            
                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                                <div class="mt-20 alert-msg" style="text-align: left;"></div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                <button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
                                                                        
                            </div>
                        </div>
                    </form>	
                </div>
            </div>
        </div>	
    </section>

    {{-- <div class="container">
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
        
    </div> --}}
@endsection