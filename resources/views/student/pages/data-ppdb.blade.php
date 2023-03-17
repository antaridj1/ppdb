<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
@include('student.components.cssadmin')

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>
</head>
<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>
    <div class="wrapper">
        @include('student.pages.components.sidebar')
        <div class="page-wrapper">
            <header class="main-header" id="header">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <!-- Sidebar toggle button -->
                        <button id="sidebar-toggler" class="sidebar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <span class="page-title">basic input</span>
                        <div class="navbar-right ">
                            <div class="search-form">
                                <form action="index.html" method="get">
                                    <div class="input-group input-group-sm" id="input-group-search">
                                    <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                        <button class="btn" type="button">/</button>
                                    </div>
                                    </div>
                                </form>
                                <ul class="dropdown-menu dropdown-menu-search">

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Morbi leo risus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Vestibulum at eros</a>
                                    </li>

                                </ul>
                            </div>
                            <ul class="nav navbar-nav">
                            <!-- Offcanvas -->
                                <li class="custom-dropdown">
                                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                                    <i class="mdi mdi-contacts icon"></i>
                                    </a>
                                </li>
                                <li class="custom-dropdown">
                                    <button class="notify-toggler custom-dropdown-toggler">
                                    <i class="mdi mdi-bell-outline icon"></i>
                                    <span class="badge badge-xs rounded-circle">21</span>
                                    </button>
                                    <div class="dropdown-notify">

                                    <header>
                                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                                            aria-selected="true">All (5)</a>
                                        <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">Msgs (4)</a>
                                        <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Others (3)</a>
                                        </div>
                                    </header>

                                    <div class="" data-simplebar style="height: 325px;">
                                        <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-02.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">John Doe</span>
                                                <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>Just now</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 bg-light mb-0">
                                            <div class="media-sm-wrapper bg-primary">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-calendar-check-outline"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">New event added</span>
                                                <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                <span class="time">
                                                    <time>10 min ago...</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-03.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Sagge Hudson</span>
                                                <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>1 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info-dark">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-account-multiple-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Add request</span>
                                                <span class="discribe">Add Dany Jones as your contact.</span>
                                                <div class="buttons">
                                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                </div>
                                                <span class="time">
                                                    <time>6 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-playlist-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Task complete</span>
                                                <span class="discribe">Afraid at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>1 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-01.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Selena Wagner</span>
                                                <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                                <span class="time">
                                                    <time>15 min ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-03.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Sagge Hudson</span>
                                                <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>1 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-02.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">John Doe</span>
                                                <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                                    at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>Just now</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper">
                                                <a href="user-profile.html">
                                                <img src="images/user/user-sm-04.jpg" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Albrecht Straub</span>
                                                <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                                <span class="time">
                                                    <time>Just now</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                                            <div class="media media-sm p-4 bg-light mb-0">
                                            <div class="media-sm-wrapper bg-primary">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-calendar-check-outline"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">New event added</span>
                                                <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                <span class="time">
                                                    <time>10 min ago...</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info-dark">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-account-multiple-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Add request</span>
                                                <span class="discribe">Add Dany Jones as your contact.</span>
                                                <div class="buttons">
                                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                </div>
                                                <span class="time">
                                                    <time>6 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info">
                                                <a href="user-profile.html">
                                                <i class="mdi mdi-playlist-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                <span class="title mb-0">Task complete</span>
                                                <span class="discribe">Afraid at highly months do things on at.</span>
                                                <span class="time">
                                                    <time>1 hrs ago</time>...
                                                </span>
                                                </a>
                                            </div>
                                            </div>

                                        </div>
                                        </div>
                                    </div>

                                    <footer class="border-top dropdown-notify-footer">
                                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                                        <span>Last updated 3 min ago</span>
                                        <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                                        </div>
                                    </footer>
                                    </div>
                                </li>
                            <!-- User Account -->
                                <li class="dropdown user-menu">
                                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">John Doe</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a class="dropdown-link-item" href="user-profile.html">
                                        <i class="mdi mdi-account-outline"></i>
                                        <span class="nav-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="email-inbox.html">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="nav-text">Message</span>
                                        <span class="badge badge-pill badge-primary">24</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-activities.html">
                                        <i class="mdi mdi-diamond-stone"></i>
                                        <span class="nav-text">Activitise</span></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-account-settings.html">
                                        <i class="mdi mdi-settings"></i>
                                        <span class="nav-text">Account Setting</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </header>

            <!-- ====================================
            ——— CONTENT WRAPPER
            ===================================== -->
            <div class="content-wrapper">
                <div class="content"><!-- For Components documentaion -->
                    <div class="card card-default">
                        <div class="px-6 py-4">
                            <p>Isi formuir Pendaftaran Peserta Didik Baru berikut sesuai dengan data siswa yang akan didaftarkan. Upload berkas-berkas yang diperlukan</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Form Data Pribadi -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Pribadi</h1>
                                    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-square" role="button"
                                    aria-expanded="false" aria-controls="collapse-input-square"> </a>
                                </div>
                                <div class="card-body">
                                    <form>
                                        @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control rounded-0" id="exampleFormControlInput4">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Jenis Kelamin</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="laki-laki" name="gender" class="custom-control-input" value="laki-laki">
                                            <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="perempuan">
                                            <label class="custom-control-label" for="perempuan">Perempuan</label>
                                        </div>
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">NISN</label>
                                        <input type="number" class="form-control rounded-0" id="exampleFormControlInput4" maxlength="10">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">NIK/No. KITAS (Untuk WNA)</label>
                                        <input type="number" name="nik" class="form-control rounded-0" id="exampleFormControlInput4" maxlength="16">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">No. KK</label>
                                        <input type="number" name="kk" class="form-control rounded-0" id="exampleFormControlInput4">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control rounded-0" id="exampleFormControlInput4">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Tgl. Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control rounded-0" id="exampleFormControlInput4">
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">No. Registrasi Akta Kelahiran</label>
                                        <input type="number" name="no_regis_akta" class="form-control rounded-0" id="exampleFormControlInput4">
                                        <div id="calendar"></div>
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Agama dan Kepercayaan</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="islam" name="agama" class="custom-control-input" value="islam">
                                            <label class="custom-control-label" for="islam">Islam</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kristen" name="agama" class="custom-control-input" value="kristen/protestan">
                                            <label class="custom-control-label" for="kristen">Kristen/Protestan</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="khatolik" name="agama" class="custom-control-input" value="khatolik">
                                            <label class="custom-control-label" for="khatolik">Khatolik</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="hindu" name="agama" class="custom-control-input" value="hindu">
                                            <label class="custom-control-label" for="hindu">Hindu</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="budha" name="agama" class="custom-control-input" value="budha">
                                            <label class="custom-control-label" for="budha">Budha</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="konghucu" name="agama" class="custom-control-input" value="konghucu">
                                            <label class="custom-control-label" for="konghucu">Konghucu</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="yme" name="agama" class="custom-control-input" value="percaya kepada tuhan yme">
                                            <label class="custom-control-label" for="yme">Percaya Kepada Tuhan YME</label>
                                        </div>
                                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Kewarganegaraan</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="customRadio2" name="kewarganegaraan" class="custom-control-input" value="wni">
                                            <label class="custom-control-label" for="customRadio2">Indonesia (WNI)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="customRadio3" name="kewarganegaraan" class="custom-control-input" value="wna">
                                            <label class="custom-control-label" for="customRadio3">Asing (WNA)</label>
                                        </div>
                                        <input type="text" class="form-control rounded-0" name="negara" id="exampleFormControlInput4" placeholder="Negara" value="">
                                        <span class="mt-2 d-block"><span style="color:red;">*</span>Isi apabila WNA</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="tidak" name="berkebutuhan_khusus" class="custom-control-input" value="tidak">
                                            <label class="custom-control-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="netra" name="berkebutuhan_khusus" class="custom-control-input" value="netra">
                                            <label class="custom-control-label" for="netra">Netra (A)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="rungu" name="berkebutuhan_khusus" class="custom-control-input" value="rungu">
                                            <label class="custom-control-label" for="rungu">Rungu (B)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="grahitar" name="berkebutuhan_khusus" class="custom-control-input" value="grahita ringan">
                                            <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="grahitas" name="berkebutuhan_khusus" class="custom-control-input" value="grahita sedang">
                                            <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="daksar" name="berkebutuhan_khusus" class="custom-control-input" value="daksa ringan">
                                            <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="daksas" name="berkebutuhan_khusus" class="custom-control-input" value="daksa sedang">
                                            <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="laras" name="berkebutuhan_khusus" class="custom-control-input" value="laras">
                                            <label class="custom-control-label" for="laras">Laras (E)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="wicara" name="berkebutuhan_khusus" class="custom-control-input" value="wicara">
                                            <label class="custom-control-label" for="wicara">Wicara (F)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="tuna" name="berkebutuhan_khusus" class="custom-control-input" value="tuna ganda">
                                            <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="hiper" name="berkebutuhan_khusus" class="custom-control-input" value="hiper aktif">
                                            <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="cerdas" name="berkebutuhan_khusus" class="custom-control-input" value="cerdas istimewa">
                                            <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="bakat" name="berkebutuhan_khusus" class="custom-control-input" value="bakat istimewa">
                                            <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kesulitan" name="berkebutuhan_khusus" class="custom-control-input" value="kesulitan belajar">
                                            <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="narkoba" name="berkebutuhan_khusus" class="custom-control-input" value="narkoba">
                                            <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="indigo" name="berkebutuhan_khusus" class="custom-control-input" value="indigo">
                                            <label class="custom-control-label" for="indigo">Indigo (O)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="down" name="berkebutuhan_khusus" class="custom-control-input" value="down sindrome">
                                            <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="autis" name="berkebutuhan_khusus" class="custom-control-input" value="autis">
                                            <label class="custom-control-label" for="autis">Autis (Q)</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">RT</label>
                                        <input type="number" class="form-control rounded-0" name="rt" maxlength="3" id="exampleFormControlPasswor3">
                                        <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">RW</label>
                                        <input type="number" class="form-control rounded-0" name="rw" maxlength="3" id="exampleFormControlPasswor3">
                                        <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Dusun</label>
                                        <input type="text" class="form-control rounded-0" name="dusun" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Kelurahan/Desa</label>
                                        <input type="text" class="form-control rounded-0" name="desa" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Kecamatan</label>
                                        <input type="text" class="form-control rounded-0" name="kecamatan" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Kode Pos</label>
                                        <input type="number" class="form-control rounded-0" name="kode_pos" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">lintan</label>
                                        <input type="text" class="form-control rounded-0" name="lintang" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Bujur</label>
                                        <input type="text" class="form-control rounded-0" name="bujur" id="exampleFormControlPasswor3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Tempat Tinggal</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ortu" name="tempat_tinggal" class="custom-control-input" value="bersama orang tua">
                                            <label class="custom-control-label" for="ortu">Bersama orang tua</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="wali" name="tempat_tinggal" class="custom-control-input" value="wali">
                                            <label class="custom-control-label" for="wali">Wali</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kos" name="tempat_tinggal" class="custom-control-input" value="kos">
                                            <label class="custom-control-label" for="kos">Kos</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="asrama" name="tempat_tinggal" class="custom-control-input" value="asrama">
                                            <label class="custom-control-label" for="asrama">Asrama</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="panti" name="tempat_tinggal" class="custom-control-input" value="panti asuhan">
                                            <label class="custom-control-label" for="panti">Panti asuhan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Moda Transportasi</label><br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="jalan" name="transportasi" class="custom-control-input" value="jalan kaki">
                                            <label class="custom-control-label" for="jalan">Jalan kaki</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kendaraan" name="transportasi" class="custom-control-input" value="kendaraan pribadi">
                                            <label class="custom-control-label" for="kendaraan">Kendaraan pribadi</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="umum" name="transportasi" class="custom-control-input" value="kendaraan umum">
                                            <label class="custom-control-label" for="umum">Kendaraan umum</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="jemput" name="transportasi" class="custom-control-input" value="jemputan sekolah">
                                            <label class="custom-control-label" for="jemput">Jemputan sekolah</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kereta" name="transportasi" class="custom-control-input" value="kereta api">
                                            <label class="custom-control-label" for="kereta">Kereta api</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="transportasi" class="custom-control-input" value="ojek">
                                            <label class="custom-control-label" for="ojek">Ojek</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="becak" name="transportasi" class="custom-control-input" value="becak">
                                            <label class="custom-control-label" for="becak">Becak</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="penyebrangan" name="transportasi" class="custom-control-input" value="perahu penyebrangan">
                                            <label class="custom-control-label" for="penyebrangan">Perahu penyebrangan</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="lainnya" name="transportasi" class="custom-control-input" value="lainnya">
                                            <label class="custom-control-label" for="lainnya">lainnya</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Anak keberapa</label>
                                        <input type="number" class="form-control rounded-0" id="exampleFormControlPasswor3" name="anak_ke" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Memiliki KIP</label><br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="kip" class="custom-control-input" value="iya">
                                            <label class="custom-control-label" for="ojek">Iya</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="kip" class="custom-control-input" value="tidak">
                                            <label class="custom-control-label" for="ojek">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Apakah peserta didik tetap menerima KIP</label><br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="menerima_kip" class="custom-control-input" value="iya">
                                            <label class="custom-control-label" for="ojek">Iya</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="menerima_kip" class="custom-control-input" value="tidak">
                                            <label class="custom-control-label" for="ojek">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlPasswor3">Alasan menolak PIP</label><br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="menolak_pip" class="custom-control-input" value="dilarang pemda">
                                            <label class="custom-control-label" for="ojek">Dilarang pemda karena menerima bantuan serupa</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="menolak_pip" class="custom-control-input" value="menolak">
                                            <label class="custom-control-label" for="ojek">Menolak</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="ojek" name="menolak_pip" class="custom-control-input" value="mampu">
                                            <label class="custom-control-label" for="ojek">Sudah mampu</label>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Form Data Ayah Kandung -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Ayah Kandung</h1>
                                    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-square" role="button"
                                    aria-expanded="false" aria-controls="collapse-input-square"> </a>
                                </div>
                                <div class="card-body">
                                    <form>
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Nama Ayah</label>
                                            <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3" name="nama_ayah">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">NIK</label>
                                            <input type="number" class="form-control rounded-0" id="exampleFormControlPasswor3" name="nik_ayah">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Tahun Lahir</label>
                                            <input type="number" class="form-control rounded-0" id="exampleFormControlPasswor3" maxlength="4" name="tahun">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Pendidikan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak_sekolah" name="pendidikan" class="custom-control-input" value="Tidak Sekolah">
                                                <label class="custom-control-label" for="tidak_sekolah">Tidak Sekolah</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="putus-sd" name="pendidikan" class="custom-control-input" value="Putus SD">
                                                <label class="custom-control-label" for="putus-sd">Putus SD</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sd" name="pendidikan" class="custom-control-input" value="SD Sederajat">
                                                <label class="custom-control-label" for="sd">SD Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="smp" name="pendidikan" class="custom-control-input" value="SMP Sederajat">
                                                <label class="custom-control-label" for="smp">SMP Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sma" name="pendidikan" class="custom-control-input" value="SMA Sederajat">
                                                <label class="custom-control-label" for="sma">SMA Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d1" name="pendidikan" class="custom-control-input" value="D1">
                                                <label class="custom-control-label" for="d1">D1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d2" name="pendidikan" class="custom-control-input" value="D2">
                                                <label class="custom-control-label" for="d2">D2</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d3" name="pendidikan" class="custom-control-input" value="D3">
                                                <label class="custom-control-label" for="d3">D3</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s1" name="pendidikan" class="custom-control-input" value="S1">
                                                <label class="custom-control-label" for="s1">S1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s2" name="pendidikan" class="custom-control-input" value="S2">
                                                <label class="custom-control-label" for="s2">S2</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="pekerjaan" class="custom-control-input" value="Tidak Bekerja">
                                                <label class="custom-control-label" for="tidak">Tidak Bekerja</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nelayan" name="pekerjaan" class="custom-control-input" value="Nelayan">
                                                <label class="custom-control-label" for="nelayan">Nelayan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="petani" name="pekerjaan" class="custom-control-input" value="Petani">
                                                <label class="custom-control-label" for="petani">Petani</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="peternak" name="pekerjaan" class="custom-control-input" value="Peternak">
                                                <label class="custom-control-label" for="peternak">Peternak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pns" name="pekerjaan" class="custom-control-input" value="PNS/TNI/POLRI">
                                                <label class="custom-control-label" for="pns">PNS/TNI/POLRI</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="karyawan" name="pekerjaan" class="custom-control-input" value="Karyawan Swasta">
                                                <label class="custom-control-label" for="karyawan">Karyawan Swasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangk" name="pekerjaan" class="custom-control-input" value="Pedagang Kecil">
                                                <label class="custom-control-label" for="pedagangk">Pedagang Kecil</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangb" name="pekerjaan" class="custom-control-input" value="Pedagang Besar">
                                                <label class="custom-control-label" for="pedagangb">Pedagang Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wiraswasta" name="pekerjaan" class="custom-control-input" value="Wiraswasta">
                                                <label class="custom-control-label" for="wiraswasta">Wiraswasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wirausaha" name="pekerjaan" class="custom-control-input" value="Wirausaha">
                                                <label class="custom-control-label" for="wirausaha">Wirausaha</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="buruh" name="pekerjaan" class="custom-control-input" value="buruh">
                                                <label class="custom-control-label" for="buruh">Buruh</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pensiun" name="pekerjaan" class="custom-control-input" value="pensiun">
                                                <label class="custom-control-label" for="pensiun">Pensiun</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecil" name="penghasilan" class="custom-control-input" value="< Rp 500.000">
                                                <label class="custom-control-label" for="kecil">< Rp 500.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sedang" name="penghasilan" class="custom-control-input" value="Rp 500.000 - Rp 999.999">
                                                <label class="custom-control-label" for="sedang">Rp 500.000 - Rp 999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lumayan" name="penghasilan" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999">
                                                <label class="custom-control-label" for="lumayan">Rp 1.000.000 - Rp 1.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="menengah" name="penghasilan" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999">
                                                <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="atas" name="penghasilan" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000">
                                                <label class="custom-control-label" for="atas">Rp 5.000.000 - Rp 20.000.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lebih" name="penghasilan" class="custom-control-input" value="> Rp 20.000.000">
                                                <label class="custom-control-label" for="lebih">> Rp 20.000.000</label>
                                            </div>
                                            <div class="form-group">
                                        <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="tidak" name="berkebutuhan_khusus" class="custom-control-input" value="tidak">
                                            <label class="custom-control-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="netra" name="berkebutuhan_khusus" class="custom-control-input" value="netra">
                                            <label class="custom-control-label" for="netra">Netra (A)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="rungu" name="berkebutuhan_khusus" class="custom-control-input" value="rungu">
                                            <label class="custom-control-label" for="rungu">Rungu (B)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="grahitar" name="berkebutuhan_khusus" class="custom-control-input" value="grahita ringan">
                                            <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="grahitas" name="berkebutuhan_khusus" class="custom-control-input" value="grahita sedang">
                                            <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="daksar" name="berkebutuhan_khusus" class="custom-control-input" value="daksa ringan">
                                            <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="daksas" name="berkebutuhan_khusus" class="custom-control-input" value="daksa sedang">
                                            <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="laras" name="berkebutuhan_khusus" class="custom-control-input" value="laras">
                                            <label class="custom-control-label" for="laras">Laras (E)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="wicara" name="berkebutuhan_khusus" class="custom-control-input" value="wicara">
                                            <label class="custom-control-label" for="wicara">Wicara (F)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="tuna" name="berkebutuhan_khusus" class="custom-control-input" value="tuna ganda">
                                            <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="hiper" name="berkebutuhan_khusus" class="custom-control-input" value="hiper aktif">
                                            <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="cerdas" name="berkebutuhan_khusus" class="custom-control-input" value="cerdas istimewa">
                                            <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="bakat" name="berkebutuhan_khusus" class="custom-control-input" value="bakat istimewa">
                                            <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="kesulitan" name="berkebutuhan_khusus" class="custom-control-input" value="kesulitan belajar">
                                            <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="narkoba" name="berkebutuhan_khusus" class="custom-control-input" value="narkoba">
                                            <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="indigo" name="berkebutuhan_khusus" class="custom-control-input" value="indigo">
                                            <label class="custom-control-label" for="indigo">Indigo (O)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="down" name="berkebutuhan_khusus" class="custom-control-input" value="down sindrome">
                                            <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="autis" name="berkebutuhan_khusus" class="custom-control-input" value="autis">
                                            <label class="custom-control-label" for="autis">Autis (Q)</label>
                                        </div>
                                    </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end content wrapper --}}
            <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
            </footer>

        </div>
    </div>




                   @include('student.components.jsadmin')
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>




                    <!--  -->


  </body>
</html>
