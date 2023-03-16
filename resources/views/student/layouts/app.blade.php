<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('student.components.css')
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

  @include('student.components.js')

</body>

</html>
