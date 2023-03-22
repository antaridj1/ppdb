@extends('layout.auth')
@section('title','Login | PPDB')

@section('content')
    <div class="card-body px-5 pb-5 pt-0">
        <h4 class="text-dark mb-5 text-center mt-5" style="font-weight:bold;">Login</h4>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-5">
                    <label for="yourEmail" class="form-label">Email</label>
                    <input type="email" class="form-control input-lg" name="email" id="email" aria-describedby="emailHelp" >
                </div>
                <div class="form-group col-md-12 mb-5 ">
                    <label for="yourEmail" class="form-label">Password</label>
                    <input type="password" class="form-control input-lg" name="password" id="password">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-pill mb-4 btn-block">Login</button>
                    <p style="text-align: center;">Belum memiliki akun?
                        <a class="text-blue" href="{{route('register')}}">Registrasi</a>
                    </p>
                </div>
            </div>
        </form>
    </div>

    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif
@endsection



