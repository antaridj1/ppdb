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

  <title>Data Peserta Didik</title>

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
                    @if ($daftar == 0)
                        <div class="card card-default">
                            <div class="px-6 py-4">
                                <p>Isi formulir Pendaftaran Peserta Didik Baru berikut sesuai dengan data siswa yang akan didaftarkan. Upload berkas-berkas yang diperlukan. <span style="color:orangered">Data yang telah diinput tidak dapat diupdate</span></p>
                            </div>
                        </div>
                    @else
                    @endif
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Form Data Pribadi -->
                            @if ($daftar == 0)
                                @include('student.pages.components.form-input')
                            @else
                            {{-- bisa edit kalau acc nya salah dan verifikasi gak sukses --}}
                                @if($siswa->dataPribadi->isAccepted === 0 || $siswa->dataPribadi->isVerificated === 0 ||)
                                    @include('student.pages.components.form-edit')
                                @elseif($siswa->dataPribadi->isAccepted == 1 || $siswa->dataPribadi->isVerificated === 1 || $siswa->dataPribadi->isVerificated === null)
                                    @include('student.pages.components.form-show')
                                @else
                                @endif
                            @endif
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
    @stack('js-plus')
  </body>
</html>
