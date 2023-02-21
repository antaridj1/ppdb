@extends('layout.user.app')

@section('content')

  @include('layout.user.header')
  @include('layout.user.hero')

  <main id="main">
    <section id="contact" class="contact">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group mt-3">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="yourEmail" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                @if (Route::has('password.request'))
                    <a class="small text-end" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif
                <div class="col-12 mb-5">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
               
              </form>
            </div>
  
  
            <div class="col-lg-12 ">
             
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.8565442032327!2d115.26851871186498!3d-8.609768776918605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21397ac3ad44d%3A0x535406596e521240!2sSemara%20Mulia%20Studio%20Arsitek!5e0!3m2!1sen!2sus!4v1676300133812!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
  
          </div>
  
        </div>
      </section>
  </main>
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{asset('assets/img/Logo_BRII.png')}}"  alt="">
                                
                            </a>
                        </div><!-- End Logo -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun</h5>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="yourEmail" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="small text-end" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif
                                    <div class="col-12">
                                        {{-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div> --}}
                                    </div>
                                    <div class="col-12 mb-5">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                    
                                    {{-- <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="{{route('register')}}">Create an account</a></p>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection
    
