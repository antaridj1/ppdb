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

  <title>Profile Setting</title>

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
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Edit Profile</h1>
                                </div>
                                <div class="card-body">
                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong> {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form method="POST" enctype="multipart/form-data" action="">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $siswa->id }}">
                                        <input type="hidden" name="sekolah_id" value="{{ $siswa->sekolah_id }}">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control rounded-0" name="email" id="email" value="{{ $siswa->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control rounded-0" name="password" id="password" value="">
                                            <input type="checkbox" id="showPassword"> <span for="showPassword">Show Password</span><br>
                                            @error('password')
                                                <span class="mt-2 d-block">{{ $message }}</span>
                                            @enderror
                                            <span>Kosongkan bila tidak mengganti password</span>

                                        </div>
                                        <div class="form-group">
                                            <label for="no_tlp">Tlp. Rumah</label>
                                            <input type="number" class="form-control rounded-0" name="no_tlp" id="no_tlp" value="{{ $siswa->no_tlp }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No. HP</label>
                                            <input type="number" class="form-control rounded-0" name="no_hp" id="no_hp" value="{{ $siswa->no_hp }}">
                                        </div>
                                        <button type="submit" class="btn btn-square btn-primary">Simpan perubahan</button>
                                    </form>
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
            const passwordInput = document.getElementById("password");
            const passwordInputc = document.getElementById("passwordc");

            showPassword.addEventListener("change", function(){
                if(showPassword.checked){
                    passwordInput.type = "text"
                } else {
                    passwordInput.type = "password"
                }
            })
        </script>
  </body>
</html>
