<header class="header-section">
  <div class="top-nav">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="tn-left">
            <li><i class="fa fa-phone"></i> (+234) 000 000 0000</li>
            <li><i class="fa fa-envelope"></i> kadris.info@gmail.com</li>
          </ul>
        </div>
        <div class= "col-lg-6">
        @include('layouts.partials.login')
          <div class="tn-right">
            <div class="signer">
              <ul class="tn-right">                                   
                @auth
                  <li><a class="nav-link" style="cursor: pointer" href="{{ url('/stamp-duty-history') }}">Stamp Duty History</a>|
                    <li><a class="nav-link" style="cursor: pointer" href="{{ route('logout') }}">Logout</a>
                @else
                  <li><a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#loginModal"> {{ __('Login') }}</a></li>
                    <label>|</label>
                  <li><a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#registerModal">{{ __('Sign Up') }}</a>
                
                  @include('layouts.partials.register')
                @endauth
              </ul>

            </div>
          </div>
        </div>
          
        </div>
      </div>
    </div>

</header>