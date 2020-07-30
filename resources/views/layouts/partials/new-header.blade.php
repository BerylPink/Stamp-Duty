<header id="header" class="">
    <div class="container">
        <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">  
                <a class="tel" href="mailto:info@horseclub.com">kadris.info@gmail.com</a>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                <!-- <a href="index.html">
                    <img class="img-fluid" src="img/logo.png" alt="">	
                </a>			    			 -->
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:+880 123 12 658 439">(+234) 000 000 0000</a>
            </div>
        </div>
    </div>	
        <hr>
    <div class="container">	
      <div class="row">
        <div class="col-lg-2">
          <div class="logo">
            <a href="#">
              <img src="{{ asset('uploads/statelogo.png') }}" alt="Kaduna State Logo" width="50" height="auto">
            </a>
          </div>
        </div>
        <div class="col-lg-8 align-items-center justify-content-center d-flex">
          <nav id="nav-menu-container">
            <ul class="nav-menu sf-js-enabled sf-arrows mr-auto" style="touch-action: pan-y;">
              <li class= "{{ Route::currentRouteNamed('home') ? 'menu-active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
              <li class="{{ Route::currentRouteNamed('about') ? 'menu-active' : '' }}"><a href="{{ route('about') }}">About</a></li>
              <li class="{{ Route::currentRouteNamed('transac-individual.index', 'assessments.show') ? 'menu-active' : '' }}"><a href="{{ url('transac-individual') }}">Services</a></li>
              <li class="{{ Route::currentRouteNamed('verification.index') ? 'menu-active' : '' }}"><a href="{{ url('verification') }}">Verification</a></li>
              <li class="{{ Route::currentRouteNamed('contact') ? 'menu-active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
              @auth
              <li class="menu-has-children {{ Route::currentRouteNamed('stamp-duty-history.index') ? 'menu-active' : '' }}"><a class="sf-with-ul">More</a>
                <ul style="display: none;"> 
                  <li><a href="{{ url('/stamp-duty-history') }}">Stamp Duty History</a>
                  <li><a href="{{ route('logout') }}">Logout</a>
                </ul>
              </li>

              <li class="menu-active">User: {{ Auth::user()->firstname.' '.Auth::user()->lastname }}</li>

              @else
              <li class="menu-has-children"><a class="sf-with-ul">Get Started</a>
                <ul style="display: none;">
                  <li><a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#loginModal"> {{ __('Login') }}</a></li>
                  <li><a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#registerModal">{{ __('Sign Up') }}</a>
                </ul>
              </li>
              @endauth

              @if (Route::currentRouteNamed('invoice'))
                <li class="menu-has-children {{ Route::currentRouteNamed('invoice', 'certificate') ? 'menu-active' : '' }}""><a class="sf-with-ul">Print</a>
                  <ul style="display: none;">
                    <li><a style="cursor: pointer" onclick="window.print();return false;">Print</a>
                    <li><a href="{{ url('/stamp-duty-history') }}">Go Back</a>
                  </ul>
                </li>
              @endif
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header>