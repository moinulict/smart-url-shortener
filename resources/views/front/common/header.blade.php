  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top sticked">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              URLGEN
          </a>

          <i class="mobile-nav-toggle mobile-nav-show fa fa-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none fa fa-x"></i>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="{{ url('/') }}" class="active">Home</a></li>
                  <li><a href="{{ url('/about') }}">About</a></li>
                  @if(Auth::check())
                  <li class="dropdown">
                    <a class="dropbtn">Dashboard <i class="fa fa-caret-down ml-1"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/customer/dashboard') }}">Dashboard</a></li>
                      <li><a href="{{ url('/customer/profile') }}">My Account</a></li>
                      <li><a href="{{ url('/customer/my-urls') }}">My URLGens</a></li>
                      <li><a href="{{ url('/customer/change-password') }}">Change Password</a></li>
                      <li><a href="{{ url('/customer/logout') }}">Logout</a></li>
                    </ul>
                  </li>
                  @else 
                  <li><a href="javascript:;" class="myURLGenBtn">My URLGens</a></li>
                  <li><a href="javascript:;" class="signUpBtn">Sign Up</a></li>
                  <li><a href="javascript:;" class="loginBtn">Sign In</a></li>
                  @endif
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
              </ul>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <nav class="urlGenHistory">
      <a href="javascript:;"><i class="mobile-nav-toggle close fa fa-x"></i></a>

      <h3>Your URLGens</h3>
      <hr>
      <div class="urlGenHistoryResponse"></div>
      {{-- <div id="pagination"></div> --}}

      <div class="text-right mt-2 none clearHistory">
          <a href="javascript:;" class="btn btn-danger btn-sm clearHistoryBtn"><i class="fa fa-trash"></i> Clear
              History</a>
      </div>

  </nav>
