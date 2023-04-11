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

  <title>Daftar Siswa Diterima</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
@include('student.components.cssadmin')

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
            @include('student.pages.components.header')

            <!-- ====================================
            ——— CONTENT WRAPPER
            ===================================== -->
            <div class="content-wrapper">
                <div class="content"><!-- For Components documentaion -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('student.pages.components.datatable')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end content wrapper --}}
            @include('student.pages.components.footer')
        </div>
    </div>
    @include('student.components.jsadmin')
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
    <script>
        $(document).ready(function() {
            // set initial value of "negara" input based on checked radio button
            if ($("#wni").is(":checked")) {
                $("#exampleFormControlInput4").val("Indonesia");
            } else {
                $("#exampleFormControlInput4").val("");
            }

            // detect when "WNI" radio button is checked and set "negara" input value to "Indonesia"
            $("#wni").click(function() {
                $("#exampleFormControlInput4").val("Indonesia");
            });

            // detect when "WNA" radio button is checked and clear "negara" input value
            $("#wna").click(function() {
                $("#exampleFormControlInput4").val("");
            });
        });
    </script>
  </body>
</html>
