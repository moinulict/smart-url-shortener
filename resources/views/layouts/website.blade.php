<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="baseUrl" content="{{url('/')}}">

    @yield('meta')

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <!-- Favicons -->
    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/css/main.css" rel="stylesheet">


<script src="https://www.google.com/recaptcha/api.js?render={{config('services.recaptcha.key')}}"></script>
<script>
  var recaptchaSiteKey = '{{ config('services.recaptcha.key') }}';
</script>
</head>

<body class="body">

    @include('front.common.header')


    @yield('contents')



    @include('front.common.footer')



    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="    https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"></script>
    <script src="{{ url('/') }}/assets/js/main.js"></script>
    <script src="{{ url('/') }}/assets/js/auth.js"></script>

</body>

</html>
