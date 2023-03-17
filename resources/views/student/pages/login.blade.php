<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    @include('student.components.cssadmin')
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="w-100 d-flex justify-content-center border-bottom-0">
                        <h3 class="brand-name text-dark font-weight-bold">Login</h3>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0 mt-3">
                    <form action="{{ route('login.siswa') }}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" value="{{ request()->route('id') }}">
                            <div class="form-group col-md-12 mb-4">
                            <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp"
                                placeholder="email">
                            </div>
                            <div class="form-group col-md-12 ">
                            <input type="password" class="form-control input-lg" id="password" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                            <div class="d-flex justify-content-end mb-5">
                                <a class="text-color" href="#"> Forgot password? </a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-pill mt-3 mb-4 btn-block">Sign In</button>
                            <p class="text-center">Belum punya akun ?
                                <a class="text-blue" href="sign-up.html">Buat Akun</a>
                            </p>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>
