@extends('layout.app')
@section('title','PPDB')

@section('content')

    <div class="content">
        <div class="card card-default">
            <div class="card-header">
                <h2>Tambah Pengumuman</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.pengumuman.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ @old('judul') }}" required>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="pengumuman">Pengumuman</label>
                        <textarea class="form-control @error('pengumuman') is-invalid @enderror" name="pengumuman" rows="3" id="pengumuman" required>{{ @old('pengumuman') }}</textarea>
                        @error('pengumuman')
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
