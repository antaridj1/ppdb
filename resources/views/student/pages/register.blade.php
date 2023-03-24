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
                <div class="col-lg-6 col-xl-5 col-md-10 mt-5 mb-5">
                    <div class="card card-default mb-0">
                    <div class="card-header pb-0">
                        <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                        <a class="w-auto pl-0" href="/index.html">
                            <h3 class="brand-name text-dark font-weight-bold">Buat Akun</h3>
                        </a>
                        </div>
                    </div>
                    <div class="card-body px-5 pb-5 pt-0">
                        {{-- <h4 class="text-dark text-center mb-5">Sign Up</h4> --}}
                        <form action="{{ route('register.siswa') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $id }}" name="sekolah_id">
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="exampleFormControlInput4"><span style="color:red;">*</span>Email</label>
                                    <input type="email" class="form-control rounded-0" id="exampleFormControlInput4" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="mt-2 d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label for="teleponrumah">No. Tlp Rumah</label>
                                    <input type="tel" class="form-control rounded-0" id="teleponrumah" name="no_tlp" value="{{ old('no_tlp') }}">
                                    @error('no_tlp')
                                        <span class="mt-2 d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label for="nohp">No. HP</label>
                                    <input type="tel" class="form-control rounded-0" id="nohp" name="no_hp" value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                        <span class="mt-2 d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label for="password"><span style="color:red;">*</span>Password</label>
                                    <input type="password" class="form-control rounded-0" id="password" name="password" value="{{ old('password') }}" required>
                                    <input type="checkbox" id="showPassword"> <span for="showPassword">Show Password</span>
                                    @error('password')
                                        <span class="mt-2 d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label for="passwordc"><span style="color:red;">*</span>Konfirmasi Password</label>
                                    <input type="password" class="form-control rounded-0" id="passwordc" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                    <input type="checkbox" id="showPasswordc"> <span for="showPasswordc">Show Password</span>
                                    @error('password')
                                        <span class="mt-2 d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">


                                    <button type="submit" class="btn btn-primary btn-pill mb-4 btn-block">Daftar</button>

                                    <p class="text-center">Sudah memiliki akun?
                                        <a class="text-blue" href="{{ route('login.form.siswa') }}">Login</a>
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
        <script>
            const passwordInput = document.getElementById("password");
            const passwordInputc = document.getElementById("passwordc");
            const showPassword = document.getElementById("showPassword")
            const showPasswordc = document.getElementById("showPasswordc")

            showPassword.addEventListener("change", function(){
                if(showPassword.checked){
                    passwordInput.type = "text"
                } else {
                    passwordInput.type = "password"
                }
            })
            showPasswordc.addEventListener("change", function(){
                if(showPasswordc.checked){
                    passwordInputc.type = "text"
                } else {
                    passwordInputc.type = "password"
                }
            })
        </script>
</body>
</html>
