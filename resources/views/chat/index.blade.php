@extends('layout.app')
@section('title','PPDB')

@section('content')  

<div class="content">
    <div class="row no-gutters">
        <div class="col-lg-5 col-xxl-4">
            <div class="card card-default chat-left-sidebar">
                <form class="card-header px-0">
                    <div class="input-group px-5">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search...">
                    </div>
                </form>

                <ul class="card-body px-0" data-simplebar style="height: 630px;">
                    @foreach ($chatrooms as $chatroom)
                        <li class="mb-4 px-5 py-2 chatroom" data-url-create="{{url('admin/chat/create')}}/{{$chatroom->siswa_id}}" data-user-id="{{$chatroom->siswa_id}}">
                            <a class="media media-message">
                                <div class="position-relative mr-3">
                                <img class="rounded-circle" src="{{asset('assets/images/user.png')}}" width="40px" alt="User Image">
                                </div>
                                
                                <div class="media-body">
                                <div class="message-contents">
                                    <span class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="username text-dark">{{$chatroom->siswa->email}}</span>
                                    <span class="">
                                        <span class="state text-smoke"><em>{{$chatroom->created_at->diffForHumans()}}</em></span>
                                        @if($chatroom->unread_count > 0)
                                            <span class="badge badge-primary unread">{{$chatroom->unread_count}}</span>
                                        @endif
                                    </span>
                                    </span>
                                    
                                    <p class="last-msg text-smoke">{{$chatroom->messages}}</p>
                                </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-lg-7 col-xxl-8">
            <!-- Chat -->
            <div class="card card-default chat-right-sidebar">
                <div class="card-header">
                    <h2></h2>

                    <div class="dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" style="color:white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="user-profile-settings.html">Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body pb-0" data-simplebar style="height: 545px;">
                    <div id="chatroom" style="overflow-y: auto ">

                    </div>
                </div>
                

                <div class="chat-footer">
                    <form method="post" id="send_messages" data-url-store="{{url('admin/chat/store')}}">
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

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    $('.chatroom').on('click', function(){
        var user_id = $(this).data('user-id');
        $(this).find('.unread').remove();
        var urlPost = $('#send_messages').data('url-store');
        var urlCreate = $(this).data('url-create');
        $(this).addClass('chatroom-active');
        function renderChat(urlCreate){
            $.ajax({
                url: `${urlCreate}`,
                method: "GET",
                success: function(response){
                    chats = response.data;
                    $('.chat-right-sidebar').find('h2').text(response.siswa_name)
                    results = '';
                    chats.forEach(chat => {
                        if(chat.dari !== 'admin'){
                            results += 
                            `<div class="media media-chat">
                                <div class="media-body">
                                    <div class="text-content">
                                        <span class="message">${chat.messages}</span>
                                        <time class="time">${moment(chat.created_at).fromNow()}</time>
                                    </div>
                                </div>
                            </div>`;
                        } else {
                            results += 
                            `<div class="media media-chat media-chat-right">
                                <div class="media-body">
                                    <div class="text-content">
                                        <span class="message">${chat.messages}</span>
                                        <time class="time">${moment(chat.created_at).fromNow()}</time>
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
                url: urlPost + '/' + user_id,
                method: "POST",
            
                data: { 
                    "_token": "{{ csrf_token() }}",
                    chat : $('#chat').val()
                }
            }).done(function(response) {
                renderChat(urlCreate);
            });
        })

    })


   
</script>

@endsection