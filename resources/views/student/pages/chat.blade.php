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
                                    <h2>Chat Admin</h2>
                                </div>

                                <div class="card-body pb-0" data-simplebar style="height: 545px;">
                                    <div id="chatroom" style="overflow-y: auto ">
    
                                    </div>
                                </div>

                                <div class="chat-footer">
                                    <form method="post" id="send_messages" data-url-store="{{route('siswa.storeUser')}}" data-url-create="{{route('siswa.createUser')}}">
                                        @csrf
                                        <div class="input-group input-group-chat">
                                            <input type="text" class="form-control" placeholder="Tuliskan pesan" id="chat" name="chat" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append" id="send" style="cursor: pointer;">
                                                <span class="input-group-text mdi mdi-send" id="basic-addon2"></span>
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
            @include('student.pages.components.footer')

        </div>
    </div>
    @include('student.components.jsadmin')
    
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
            var urlPost = $('#send_messages').data('url-store');
            var urlCreate = $('#send_messages').data('url-create');

            function renderChat(urlCreate){
                $.ajax({
                    url: `${urlCreate}?`+ new Date().getTime(),
                    method: "GET",
                    success: function(response){
                        console.log(response)
                        results = '';
                        response.forEach(chat => {
                            if(chat.dari !== 'admin'){
                                results += 
                                `<div class="media media-chat media-chat-right">
                                    <div class="media-body">
                                        <div class="text-content">
                                            <span class="message">${chat.messages}</span>
                                            <time class="time">5 mins ago</time>
                                        </div>
                                    </div>
                                </div>`;
                            } else {
                                results += 
                                `<div class="media media-chat">
                                    <div class="media-body">
                                        <div class="text-content">
                                            <span class="message">${chat.messages}</span>
                                            <time class="time">4 mins ago</time>
                                        </div>
                                    </div>
                                </div>`;
                            }
                        });
    
                        $('#chatroom').html(results);
                    }
                })
            }
    
            renderChat(urlCreate);
    
            $('#send').on('click', function(){
                $.ajax({
                    url: urlPost,
                    method: "POST",
                
                    data: { 
                        "_token": "{{ csrf_token() }}",
                        chat : $('#chat').val()
                    }
                }).done(function(response) {
                    $('#send_messages').find('input').val('');
                    renderChat(urlCreate);
                });
            })
    </script>


  </body>
</html>
