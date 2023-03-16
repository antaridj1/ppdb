@extends('layout.app')
@section('title','PPDB')

@section('content')  

<div class="content" data-url-create="{{route('chat.create')}}">
    <div class="row no-gutters">
        <div class="col-lg-5 col-xxl-4">
            <div class="card card-default chat-left-sidebar">
                <form class="card-header px-0">
                    <div class="input-group px-5">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search...">
                    </div>
                </form>

                <ul class="card-body px-0" data-simplebar style="height: 630px;">
                    <li class="mb-4 px-5 py-2">
                        <a href="javascript:void(0)" class="media media-message">
                            <div class="position-relative mr-3">
                            <img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
                            <span class="status away"></span>
                            </div>
                            
                            <div class="media-body">
                            <div class="message-contents">
                                <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="username text-dark">Riman Ghose</span>
                                <span class="">
                                    <span class="badge badge-secondary">3</span>
                                    <span class="state text-smoke"><em>1hrs</em></span>
                                </span>
                                </span>
                                
                                <p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                odio, eligendi delectus vitae.</p>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li class="bg-primary mb-4 px-5 py-2">
                        <a href="javascript:void(0)" class="media media-message">
                            <div class="position-relative mr-3">
                                <img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
                                <span class="status active"></span>
                            </div>
                          
                            <div class="media-body">
                                <div class="message-contents">
                                    <span class="d-flex justify-content-between align-items-center mb-1">
                                        <span class="username text-white">Anna Patuary</span>
                                        <span class="">
                                        <span class="state text-white"><em>11:59am</em></span>
                                        </span>
                                    </span>
                                
                                <p class="last-msg text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                    odio, eligendi delectus vitae.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-7 col-xxl-8">
            <!-- Chat -->
            <div class="card card-default chat-right-sidebar">
                <div class="card-header">
                    <h2>Selena Wagner</h2>

                    <div class="dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="user-profile-settings.html">Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body pb-0" data-simplebar style="height: 545px;">
                <!-- Media Chat Left -->
                    <div class="media media-chat">
                        <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
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
                    <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
                </div>
            </div>

            <div class="chat-footer">
                <form data-url="{{route('chat.store')}}">
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

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $.ajax({
        url: $('.content').data('url-create'),
        method: "GET",
        success: function(response){
            console.log(response)
        }
    })
</script>

@endsection