@extends('student.layouts.app')

@section('title', 'PPDB - Online')

@section('header')
    <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">PPDB<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Tentang Kami</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li class="dropdown"><a href="#"><span>Pendaftaran Peserta Didik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('ppdb/sdn-01-gianyar') }}">SDN 1 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-02-gianyar') }}">SDN 2 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-03-gianyar') }}">SDN 3 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-04-gianyar') }}">SDN 4 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-05-gianyar') }}">SDN 5 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-06-gianyar') }}">SDN 6 Gianyar</a></li>
              <li><a href="{{ url('ppdb/sdn-07-gianyar') }}">SDN 7 Gianyar</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

@endsection

@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat datang di <span>PPDB</span></h1>
      <h2>Pendaftaran Peserta Didik Baru secara Online</h2>
      <div class="d-flex">
        <a href="#services" class="btn-get-started scrollto">Daftar Sekolah</a>
        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
      </div>
    </div>
  </section><!-- End Hero -->

<!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Daftar</a></h4>
                <p class="description">Pendaftaran siswa baru secara online melalui berbagai perangkat atau device</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Informasi</a></h4>
                <p class="description">Akses informasi mengenai pendaftaran peserta didik baru dengan akses website PPDB sekolah</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Data</a></h4>
                <p class="description">Data pendaftaran peserta didik diakses dan disimpan secara digital</p>
            </div>
            </div>
        </div>
        </div>
    </section>

<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>SDN Kabupaten Gianyar</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Peserta Didik Baru</p>
            </div>
          </div>

          {{-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div> --}}

          {{-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Counts Section -->

<!-- ======= Logo PPDB gianyar dan 7 sekolah ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-1 d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

<!-- ======= Section Sekolah ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sekolah</h2>
          {{-- <h3>Check our <span>Services</span></h3> --}}
          <p>Akses PPDB SDN Gianyar untuk melakukan Pendaftaran Peserta Didik Baru secara Online</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">SDN 1 Gianyar</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">SDN 2 Gianyar</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">SDN 3 Gianyar</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">SDN 4 Gianyar</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">SDN 5 Gianyar</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">SDN 6 Gianyar</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">SDN 7 Gianyar</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PPDB</h2>
          <h3>Pertanyaan Umum Seputar <span>PPDB</span></h3>
          <p>Berikut adalah daftar pertanyaan yang dapat membantu dalam melakukan PPDB Online</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


@endsection

@section('footer')

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

@endsection
