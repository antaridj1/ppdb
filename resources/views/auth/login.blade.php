@extends('layout.auth')
@section('title','Login | PPDB')

@section('content')
    <div class="card-body px-5 pb-5 pt-0">
        <h4 class="text-dark mb-5 text-center">Login</h4>
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
                    {{-- <div class="d-flex justify-content-between mb-3">
                        <div class="custom-control custom-checkbox mr-3 mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Remember me</label>
                        </div>
                        <a class="text-color" href="#"> Forgot password? </a>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>
                    <p>Belum memiliki akun?
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
    

    
