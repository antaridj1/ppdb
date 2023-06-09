@extends('layout.auth')
@section('title','Login | PPDB')

@section('content')
<div id="bg-login-admin"></div>
    <div class="card-body px-5 col-12 pb-5 pt-0">
        <h3 class="text-dark mb-6 text-center" style="margin-top: 20px;">Login Admin</h3>
        <form action="{{route('admin.login')}}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-4" style="margin-top: 20px;">
                    <label for="yourEmail" class="form-label">Email</label>
                    <input type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <label for="yourEmail" class="form-label">Password</label>
                    <input type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12" style="margin-top: 40px;">
                    {{-- <div class="d-flex justify-content-between mb-3">
                        <div class="custom-control custom-checkbox mr-3 mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Remember me</label>
                        </div>
                        <a class="text-color" href="#"> Forgot password? </a>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-pill mb-4 w-100">Sign In</button>
                    {{-- <p>Don't have an account yet ?
                        <a class="text-blue" href="sign-up.html">Sign Up</a>
                    </p> --}}
                </div>
            </div>
        </form>
    </div>
    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif

@endsection

