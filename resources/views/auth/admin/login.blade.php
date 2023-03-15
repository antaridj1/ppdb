@extends('layout.app')
@section('title','Login | PPDB')

@section('container')
    <div class="card-body px-5 pb-5 pt-0">
        <h4 class="text-dark mb-6 text-center">Login</h4>
        <form action="/index.html">
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password">
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="custom-control custom-checkbox mr-3 mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Remember me</label>
                        </div>
                        <a class="text-color" href="#"> Forgot password? </a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>
                    <p>Don't have an account yet ?
                        <a class="text-blue" href="sign-up.html">Sign Up</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
@endsection
    