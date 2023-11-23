<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="baseUrl" content="{{url('/')}}">
    <link rel="canonical" href="https://urlgen.io/">
    @yield('meta')

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://urlgen.io/" />
    <meta property="og:site_name" content="urlgen.io" />
    <meta name="author" content="urlgen.io" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <meta property="og:image" content="{{ url('/') }}/assets/img/urlgen-long-url-to-short-url-social.jpeg" />
    <meta name="twitter:image" content="{{ url('/') }}/assets/img/urlgen-long-url-to-short-url-social.jpeg">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-128.png" sizes="128x128">
    <link rel="apple-touch-icon"  href="{{ url('/') }}/assets/img/favicon-152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ url('/') }}/assets/img/favicon-167.png" sizes="167x167" >
    <link rel="apple-touch-icon" href="{{ url('/') }}/assets/img/favicon-180.png" sizes="180x180" >
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-192.png" sizes="192x192">


    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/css/main.css" rel="stylesheet">


  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D3YRK8ZGML"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D3YRK8ZGML');
</script>
</head>

<body class="body">

    @include('front.common.header')


    @yield('contents')



    @include('front.common.footer')



    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ url('/') }}/assets/js/main.js"></script>
    <script src="{{ url('/') }}/assets/js/auth.js"></script>

</body>

</html>
