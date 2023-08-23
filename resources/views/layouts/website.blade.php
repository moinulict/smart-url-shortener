<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="baseUrl" content="{{url('/')}}">
    @yield('meta')

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon-192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/assets/img/favicon-152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ url('/') }}/assets/img/favicon-167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/assets/img/favicon-180.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D3YRK8ZGML"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D3YRK8ZGML');
</script>
</head>

<body>

    @include('front.common.header')


    @yield('contents')



    @include('front.common.footer')



    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('/') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ url('/') }}/assets/js/main.js"></script>

</body>

</html>
