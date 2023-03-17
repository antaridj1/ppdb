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
                <div class="content">
                    <div class="row no-gutters">

                    <div class="col-lg-12 col-xxl-12">
                        <!-- Chat -->
                        <div class="card card-default chat-right-sidebar">
                        <div class="card-header">
                            <h2>Pesan Dengan Admin</h2>

                            {{-- <div class="dropdown">
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="user-profile-settings.html">Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">Logout</a>
                                </div>
                            </div>
                            </div> --}}
                        </div>

                        <div class="card-body pb-0" data-simplebar style="height: 545px;">
                            <!-- Media Chat Left -->
                            <div class="media media-chat">
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Hello my name is anna.</span>
                                <time class="time">5 mins ago</time>
                                </div>
                            </div>
                            </div>

                            <!-- Media Chat Right -->
                            <div class="media media-chat media-chat-right">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Hello i am Riman.</span>
                                <time class="time">4 mins ago</time>
                                </div>

                                <div class="text-content">
                                <span class="message">I want to know about yourself</span>
                                <time class="time">3 mins ago</time>
                                </div>
                            </div>
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            </div>

                            <!-- Media Chat Left -->
                            <div class="media media-chat">
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Its had resolving otherwise she contented therefore.</span>
                                <time class="time">1 mins ago</time>
                                </div>
                            </div>
                            </div>

                            <!-- Media Chat Right -->
                            <div class="media media-chat media-chat-right">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Hello i am Riman.</span>
                                <time class="time">4 mins ago</time>
                                </div>

                                <div class="text-content">
                                <span class="message">I want to know about yourself</span>
                                <time class="time">3 mins ago</time>
                                </div>
                            </div>
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            </div>

                            <!-- Media Chat Left -->
                            <div class="media media-chat">
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Its had resolving otherwise she contented therefore.</span>
                                <time class="time">1 mins ago</time>
                                </div>
                            </div>
                            </div>

                            <!-- Media Chat Right -->
                            <div class="media media-chat media-chat-right">
                            <div class="media-body">
                                <div class="text-content">
                                <span class="message">Hello i am Riman.</span>
                                <time class="time">4 mins ago</time>
                                </div>

                                <div class="text-content">
                                <span class="message">I want to know about yourself</span>
                                <time class="time">3 mins ago</time>
                                </div>
                            </div>
                            <img src="{{ asset('assets-ppdb/images/user/user-sm-01.jpg') }}" class="rounded-circle" alt="Avata Image">
                            </div>

                        </div>

                        <div class="chat-footer">
                            <form>
                            <div class="input-group input-group-chat">
                                <div class="input-group-prepend">
                                <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            </div>
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




                    <!--  -->


  </body>
</html>
