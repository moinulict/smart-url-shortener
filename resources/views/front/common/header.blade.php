  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top" data-page="home">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            Smart URL Shortener
          </a>

          <i class="mobile-nav-toggle mobile-nav-show fa fa-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none fa fa-x"></i>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="{{ url('/') }}" class="active">Home</a></li>
                  <li><a href="#">About</a></li>
                  @if (!Auth::check())
                      <li><a href="javascript:;" class="myURLGenBtn">My Smart URLs</a></li>
                      {{-- <li><a href="javascript:;" class="signUpBtn">Sign Up</a></li> --}}
                      <li><a href="javascript:;" class="loginBtn">Sign In</a></li>
                  @endif
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                  @if (Auth::check())
                      <li class="dropdown">
                          <a class="dropbtn">Account <i class="fa fa-caret-down ml-1"></i></a>
                          <ul class="dropdown-menu">
                              <li><a href="{{ url('/customer/dashboard') }}">Dashboard</a></li>
                              <li><a href="{{ url('/customer/account') }}">My Account</a></li>
                              <li><a href="{{ url('/customer/my-url-gens') }}">My Smart URLs</a></li>
                              @if(!Auth::user()->provider)
                                <li><a href="{{ url('/customer/change-password') }}">Change Password</a></li>
                              @endif
                              <li><a href="{{ url('/customer/logout') }}">Logout</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
  <!-- End Header -->
  @if (Session::has('message'))
      <div class="fixed_top_message alert alert-{{ Session::get('message_type') }}">{{ Session::get('message') }}</div>
  @endif
  <div class="fixed_top_message alert alert-info javascriptAlert none"></div>

  <nav class="urlGenHistory">
      <a href="javascript:;"><i class="mobile-nav-toggle close fa fa-x"></i></a>

      <h3>Your Smart URL Shortener</h3>
      <hr>
      <div class="urlGenHistoryResponse"></div>
      {{-- <div id="pagination"></div> --}}

      <div class="text-right mt-2 none clearHistory">
          <a href="javascript:;" class="btn btn-danger btn-sm clearHistoryBtn"><i class="fa fa-trash"></i> Clear
              History</a>
      </div>

  </nav>
