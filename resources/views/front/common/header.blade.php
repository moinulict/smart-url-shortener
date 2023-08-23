  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top sticked">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>URLGEN</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          {{-- <li><a href="javascript:;">My GEN URLs</a></li> --}}
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->