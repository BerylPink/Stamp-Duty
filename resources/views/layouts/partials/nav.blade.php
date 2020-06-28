<header class="header-section">
  <div class="top-nav">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="tn-left">
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
          </ul>
        </div>
        <div class= "col-lg-6">
          <div class="tn-right">
            <div class="signer">
              <ul>                                   
                  <li class="{{ Route::currentRouteNamed('login') ? 'active' : '' }}"><a href="/login" class="fa fa-lock">  Login</a></li>
                    <label>|</label>
                  <li class="{{ Route::currentRouteNamed('') ? 'active' : '' }}"><a href="/individual-reg" class="fa fa-key" >  Sign Up</a></li>
              </ul>
            </div>
          </div>
        </div>
          
        </div>
      </div>
    </div>

</header>