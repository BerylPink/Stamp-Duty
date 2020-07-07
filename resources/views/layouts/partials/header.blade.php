<div class="menu-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="logo">
          <a href="#">
            <img src="{{ asset('uploads/statelogo.png') }}" alt="Kaduna State Logo" width="50" height="auto">
          </a>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="nav-menu">
          <nav class="mainmenu">
            <ul>
            <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
              <li class="{{ Route::currentRouteNamed('transac-individual') ? 'active' : '' }}"><a href="{{ url('transac-individual') }}">Services</a></li>
              <li class="{{ Route::currentRouteNamed('verification') ? 'active' : '' }}"><a href="{{ url('verification') }}">Verification</a></li>
              <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>