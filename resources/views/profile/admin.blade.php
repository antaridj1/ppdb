@extends('layout.app')
@section('title','PPDB')

@section('content')  
    <div class="content">                
        <div class="card card-default">
            <div class="card-header">
                <h2>Profile</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-4">
                        <label for="nama_admin">Nama</label>
                        <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" name="nama_admin" id="nama_admin" value="{{ $admin->nama_admin }}" required>
                        @error('nama_admin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="tlp_admin">Telp</label>
                        <input type="text" class="form-control @error('tlp_admin') is-invalid @enderror" name="tlp_admin" id="tlp_admin" value="{{ $admin->tlp_admin }}" required>
                        @error('tlp_admin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $admin->email }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="gambar">Gambar Landing Page</label>
                        <input type="file" class="dropify" data-height="300" name="gambar" data-default-file="{{ asset('storage/'.$admin->gambar) }}" data-allowed-file-extensions="png jpg jpeg " />
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- End floating Labels Form -->
            </div>
        </div>
    </div>
    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif
  @endsection