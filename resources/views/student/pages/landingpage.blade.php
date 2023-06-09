@extends('student.layouts.app')

@section('title', 'PPDB - Online')

@section('header')
    <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{$admin->email}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$admin->tlp_admin}}</span></i>
      </div>
      {{-- <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> --}}
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
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li class="dropdown"><a href="#"><span>Pendaftaran Peserta Didik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach ($sekolah as $item)
                <li><a href="{{ url('ppdb/sdn/'.$item->id) }}">{{$item->nama_sekolah}}</a></li>
                @endforeach
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
  <section id="hero" class="d-flex align-items-center" style="background-image: url('{{asset('storage/'.$admin->gambar)}}')">
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
                <div class="icon"><i class="bi bi-search"></i></div>
                <h4 class="title"><a href="">Lihat Pengumuman</a></h4>
                <p class="description">Pantau informasi terbaru tentang PPDB dari website PPDB sekolah</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-file-earmark-check"></i></div>
                <h4 class="title"><a href="">Formulir Pendaftaran</a></h4>
                <p class="description">Isi dan upload dokumen PPDB secara online</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-chat-left-quote"></i></div>
                <h4 class="title"><a href="">Informasi Seleksi</a></h4>
                <p class="description">Info lolos seleksi PPDB dapat dilihat melalui website PPDB sekolah</p>
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
              <i class="bi bi-buildings"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $count_sekolah }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>SDN Kabupaten Gianyar</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-mortarboard"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $count_siswa }}" data-purecounter-duration="1" class="purecounter"></span>
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

            <div class="col-lg-6 col-md-6 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('logo/gianyar.png') }}" class="img-fluid" alt="">
              </div>

              <div class="col-lg-6 col-md-6 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('logo/tut-wuri-handayani1.png') }}" class="img-fluid" alt="">
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


        <div class="row justify-content-center">
            @foreach ($sekolah as $sekolah)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:30px;">
                <div class="icon-box">
                    @php
                        $siswa_count = \App\Models\Siswa::where('sekolah_id', $sekolah->id)->count();
                    @endphp
                    <div class="icon"><i class="bi bi-mortarboard"></i></div>
                    <h4><a href="{{url('ppdb/sdn/'.$sekolah->id)}}">{{$sekolah->nama_sekolah}}</a></h4>
                    <p>Sebanyak {{$siswa_count}} calon peserta didik telah mendaftar di sekolah ini. Daftar segera untuk menjadi bagian dari siswa {{$sekolah->nama_sekolah}}</p>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PPDB</h2>
          <h3>Pengumuman Seputar <span>PPDB</span></h3>
          <p>Berikut adalah pengumuman mengenai Penerimaan Peserta Didik Baru</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

                @foreach ($pengumumans as $index => $pengumuman)
                <li>
                  <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$index+1}}">{{$pengumuman->judul}}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq{{$index+1}}" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      {{$pengumuman->pengumuman}}
                    </p>
                  </div>
                </li>
                @endforeach



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

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>PPDB<span>.</span></h3>
            <p>
              Jalan Erlangga No. 1, Gianyar<br>
              <strong>Phone:</strong>{{ $admin->phone_number }}<br>
              <strong>Email:</strong>{{ $admin->email }}<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Pages</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#topbar">Pendaftaran PPDB</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#featured-services">Fitur PPDB Online</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#counts">Info Siswa Terdaftar</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Sekolah SDN Gianyar</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#faq">Pengumuman</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Sekolah</h4>
            <ul>
                @php
                    $sekolah_all = \App\Models\Sekolah::all();
                @endphp
                @foreach ($sekolah_all as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('ppdb/sdn/'.$item->id) }}">{{ $item->nama_sekolah }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>PPDB - Kabupaten Gianyar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

@endsection
