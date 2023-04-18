<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title')</title>

        <!-- theme meta -->
        <meta name="theme-name" content="mono" />
        @php
            $admin = App\Models\Admin::find(1);
            $sekolah = App\Models\Sekolah::all();
        @endphp
        <style>
            body:has(#bg-login-admin){
                background-image: url('{{asset('storage/'.$admin->gambar)}}');
                background-size: cover;
                background-position: center;
                height: 100vh;
            }
            body:has(#bg-login-sekolah){
                background-image: url('{{asset('image/bg-login-sekolah.jpg')}}');
                background-size: cover;
                background-position: center;
                height: 100vh;
            }
        </style>

        <!-- GOOGLE FONTS -->
        @include('layout.components.css')
    </head>

    <body class="bg-light-gray" id="body">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <div class="{{ Route::is('getLogin','admin.getLogin','sekolah.getLogin') ? 'col-6' : 'col-12'}}">
                <div class="card card-default mb-0">
                    <div class="card-header pb-0">
                        <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                        {{-- <a class="w-auto pl-0" href="/index.html"> --}}
                            {{-- <img src="images/logo.png" alt="Mono"> --}}
                            {{-- <span class="brand-name text-dark">PPDB</span> --}}
                        {{-- </a> --}}
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layout.components.js')
    </body>
</html>
