@extends('layout.app')
@section('title','PPDB')

@section('content')  

<div class="content">
    <div class="row no-gutters">
        <div class="col-12 col-md-5 col-xxl-4">
            <div class="card card-default chat-left-sidebar h-100">
                <form class="card-header px-0">
                    <div class="input-group px-5">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search...">
                    </div>
                </form>

                <ul class="card-body px-0" data-simplebar>
                    @foreach ($chatrooms as $chatroom)
                        <li class="mb-4 px-5 py-2 chatroom" data-url-create="{{url('admin/chat/create')}}/{{$chatroom->user_id}}">
                            <a class="media media-message">
                                <div class="position-relative mr-3">
                                <img class="rounded-circle" src="{{asset('assets/images/user/user-sm-02.jpg')}}" alt="User Image">
                                </div>
                                
                                <div class="media-body">
                                <div class="message-contents">
                                    <span class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="username text-dark">{{$chatroom->user->name}}</span>
                                    <span class="">
                                        <span class="state text-smoke"><em>{{$chatroom->created_at->diffForHumans()}}</em></span>
                                        @if($chatroom->unread_count > 0)
                                            <span class="badge badge-primary">{{$chatroom->unread_count}}</span>
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

        <div class="col-12 col-md-7 col-xxl-8">
            <!-- Chat -->
            <div class="card h-100 card-default chat-right-sidebar" data>
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

                <div class="card-body" data-simplebar id="chatroom">
                </div>

                <div class="chat-footer">
                    <form method="post" id="send_messages" data-url="">
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
<script>
    $('.chatroom').on('click', function(){
        $.ajax({
            url: $(this).data('url-create'),
            method: "GET",
            success: function(response){
                chats = response.data;

                chats.forEach(chat => {
                    results = '';
                    if(chat.dari == chat.user_id){
                        results += 
                        `<div class="media media-chat">
                            <div class="media-body">
                                <div class="text-content">
                                    <span class="message">${chat.messages}</span>
                                    <time class="time">5 mins ago</time>
                                </div>
                            </div>
                        </div>`;
                    } else {
                        results += 
                        `<div class="media media-chat media-chat-right">
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

                $('#send_messages').attr('data-url',`{{url('admin/chat')}}/${response.user_id}`);
                $('#send_messages').attr('data-user-id',`${response.user_id}`);
            }
        })
    })
    let user_id = $('#send_messages').data('user-id')
    console.log(user_id)

    $('#send').on('click', function(){
         $.ajax({
            url: `{{route('admin.chat.store', 1)}}`,
            method: "POST",
           
            data: { 
                "_token": "{{ csrf_token() }}",
                chat : $('#chat').val()
            }
        }).done(function(response) {
            console.log(response)
        });
    })
   
</script>

@endsection