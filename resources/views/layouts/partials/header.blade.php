<div class="menu-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="logo">
          <a href="#">
            <img src="img/logo.png" alt="">
          </a>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="nav-menu">
          <nav class="mainmenu">
            <ul>
              <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="/home">Home</a></li>
              <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="/about">About</a></li>
              <li class="{{ Route::currentRouteNamed('transac-individual') ? 'active' : '' }}"><a href="/transac-individual">Services</a></li>
              <li class="{{ Route::currentRouteNamed('verification') ? 'active' : '' }}"><a href="/verification">Verification</a></li>
              <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
            </ul>
          </nav>
            <div class="nav-right search-switch">
                <i class="icon_search"></i>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>