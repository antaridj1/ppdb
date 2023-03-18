@extends('layout.auth')
@section('title','Login | PPDB')

@section('content')
    <div class="card-body px-5 pb-5 pt-0">
        <h4 class="text-dark text-center mb-5">Registrasi</h4>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="yourEmail" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="yourEmail" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="yourEmail" class="form-label">No Telepon Rumah</label>
                    <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" value="{{ old('no_tlp') }}" id="no_tlp">
                    @error('no_tlp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="yourEmail" class="form-label">No Hp</label>
                    <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" id="no_hp" required>
                    @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-lg-6 form-group mt-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                <div class="col-12 my-5">
                    <button type="submit" class="btn btn-primary btn-pill mb-4">Registrasi</button>
                    <p>Sudah memiliki akun?
                        <a class="text-blue" href="{{route('login')}}">Login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>

    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif
    
@endsection
    
