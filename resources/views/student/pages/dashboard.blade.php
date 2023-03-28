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

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  @include('student.components.cssadmin')
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  {{-- <script src="plugins/nprogress/nprogress.js"></script> --}}
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('student.pages.components.sidebar')



      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">

          <!-- Header -->
          @include('student.pages.components.header')

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="col-xl-4">
                    <!-- Notifications -->
                    <div class="card card-default">
                    <div class="card-header">
                        <h2>Informasi</h2>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                            <div class="media-sm-wrapper bg-primary">
                                <i class="mdi mdi-star-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Jadwal Registrasi ulang</span>
                                <p>Registrasi ulang dapat dilakukan pada tanggal ... dari jam ... . Untuk informasi lebih lanjut dapat
                                    menghubungi CP yang terdapat pada website sekolah
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                            <div class="media-sm-wrapper bg-success">
                                <i class="mdi mdi-information-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">This is a Japanese doll.</span>
                                <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye
                                consisted so.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                            <div class="media-sm-wrapper bg-danger">
                                <i class="mdi mdi-square-edit-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Support Ticket</span>
                                <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only.
                                Music
                                leave say doors him.</p>
                            </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="media media-sm mb-0">
                            <div class="media-sm-wrapper bg-info">
                                <i class="mdi mdi-diamond-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">New Order</span>
                                <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened
                                oh
                                produced prospect formerly up am.</p>
                            </div>
                            </div>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>

        </div>

          <!-- Footer -->
          @include('student.pages.components.footer')

      </div>
    </div>


                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>



                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



                    {{-- <script src="plugins/toaster/toastr.min.js"></script>



                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script> --}}



                    @include('student.components.jsadmin')
                    <!--  -->


  </body>
</html>
