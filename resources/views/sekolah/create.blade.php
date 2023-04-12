@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <div class="card card-default">
            <div class="card-header">
                <h2>Tambah Sekolah</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.sekolah.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" id="nama_sekolah" value="{{ @old('nama_sekolah') }}" required>
                        @error('nama_sekolah')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="alamat_sekolah">Alamat</label>
                        <input type="text" class="form-control @error('alamat_sekolah') is-invalid @enderror" name="alamat_sekolah" id="alamat_sekolah" value="{{ @old('alamat_sekolah') }}" required>
                        @error('alamat_sekolah')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="tlp_sekolah">Telp</label>
                        <input type="text" class="form-control @error('tlp_sekolah') is-invalid @enderror" name="tlp_sekolah" id="tlp_sekolah" value="{{ @old('tlp_sekolah') }}" required>
                        @error('tlp_sekolah')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ @old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ @old('password') }}" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="gambar">Gambar Landing Page</label>
                        <input type="file" class="dropify @error('gambar') is-invalid @enderror" data-height="300" name="gambar" data-allowed-file-extensions="png jpg jpeg " data-default-file="{{asset('assets/images/default.png')}}" />
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