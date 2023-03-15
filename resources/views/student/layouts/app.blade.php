<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('asset/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @yield('header')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    @yield('footer')

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('asset/js/main.js') }}"></script>

</body>

</html>
