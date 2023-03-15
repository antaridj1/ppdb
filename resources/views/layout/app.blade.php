<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title')</title>
            
        <!-- theme meta -->
        <meta name="theme-name" content="mono" />

        <!-- GOOGLE FONTS -->
        @include('layout.components.css')
    </head>

    <body class="navbar-fixed sidebar-fixed" id="body">
        <script>
            NProgress.configure({ showSpinner: false });
            NProgress.start();
        </script>

        <div class="wrapper">
            @include('layout.components.sidebar')
            <div class="page-wrapper">
                @include('layout.components.header')     
                <div class="content-wrapper">           
                    @yield('content')
                </div>
                @include('layout.components.footer')
            </div>
        </div>
        @include('layout.components.js')
    </body>
</html>
