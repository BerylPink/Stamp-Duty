<header class="header-section">
  <div class="top-nav">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="tn-left">
            <li><i class="fa fa-phone"></i> (+234) 000 000 0000</li>
            <li><i class="fa fa-envelope"></i> info@stampduty.com</li>
          </ul>
        </div>
        <div class= "col-lg-6">
          <div class="tn-right">
            <div class="signer">
              <ul>                                   
                  <li class="{{ Route::currentRouteNamed('login') ? 'active' : '' }}"><a href="{{ route('login') }}" class="fa fa-lock">  Login</a></li>
                    <label>|</label>
                  <li class="{{ Route::currentRouteNamed('individual-reg') ? 'active' : '' }}"><a href="{{ route('individual-reg') }}" class="fa fa-key" >  Sign Up</a></li>
              </ul>
            </div>
          </div>
        </div>
          
        </div>
      </div>
    </div>

</header>